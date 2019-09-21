<?php

namespace App\Http\Controllers;

use App\Project;
use App\Reward;
use App\Support;
use App\User;
use App\Card;
use Carbon\Carbon;
use App\Mail\SupportConfirm;
use Illuminate\Http\Request;
use App\Http\Requests\SupportRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;



class SupportController extends Controller
{
	public function index (int $id)
	{
		// プロジェクトを取得
		$project = Project::find($id);
		//プロジェクトIDに紐づくrewardsテーブルを取得
		$reward = $project->rewards;
		// 総支援額
		$total_amount = Reward::select()
			->join('supports', 'supports.reward_id', '=', 'rewards.id')
			->where('rewards.pj_id', $id)
			->sum('rw_price');
		$supporter_list = array();		// Rewardごとの支援者数を格納する配列
		$stock_list     = array();		// Rewardごとの残り個数を格納する配列
		$itr = Reward::select('id')		// pj_idに紐づくリターンIDを1件取得
			->where('pj_id', $id)
			->first();
		$itr2 = $itr['id'];						// エラー回避のため一度変数に格納
		for($i = 0; $i < $reward->count(); $i++) {
			$supporter_list[] = Support::where('reward_id', $itr2)->where('pj_id', $id)->get()->count();
			$stock_list[] = $reward[$i]['rw_quantity'] - $supporter_list[$i];
			$itr2++;
		}

		// プロジェクトの開始日
		$start_day = new Carbon($project->created_at);
		// プロジェクトの終了日
		$end_day = new Carbon($project->created_at);
		$end_day->addDay($project->period);
		$end_day_str = date_format($end_day , 'Y年m月d日');
		$end_time = $end_day_str.'23:59';									// 終了までの日数
		$now_datetime = Carbon::now();
		$period = $end_day->diffInDays($now_datetime);						// 残り日数
		$target_amount = $project->target_amount; 							// 目標金
		$percent_complete = floor($total_amount / $target_amount * 100);	// 達成率

		//view側へ値を渡す処理
		return view('projects.select_support',
		[
			'project' => $project,
			'total_amount' => $total_amount,
			'supporter_list' => $supporter_list,
			'period' => $period,
			'end_time' => $end_time,
			'percent_complete' => $percent_complete,
			'rewards' => $reward,
			'stock_list' => $stock_list,
		]);
	}

	public function showSelectedReward($id, $reward_id)
	{
		//ユーザIDを取得
		$user_id = Auth::id();
		// プロジェクトを取得
		$project = Project::find($id);
		// rewardsテーブルを取得
		$reward = Reward::find($reward_id);
		// 総支援額
		$total_amount = Reward::select()
			->join('supports', 'supports.reward_id', '=', 'rewards.id')
			->where('rewards.pj_id', $id)
			->sum('rw_price');
		// Rewardごとの支援者数を格納する配列
		$supporter_list = array();
		// 支援者数を取得する
		$itr = Reward::select('id')		// pj_idに紐づくリターンIDを1件取得
			->where('pj_id', $id)
			->first();
		$itr2 = $itr['id'];						// エラー回避のため一度変数に格納
		for($i = 0; $i < $reward->count(); $i++) {
			$supporter_list[] = Support::where('reward_id', $itr2)->where('pj_id', $id)->get()->count();
			$itr2++;
		}
		// プロジェクトの開始日
		$start_day = new Carbon($project->created_at);
		// プロジェクトの終了日
		$end_day = new Carbon($project->created_at);
		$end_day->addDay($project->period);
		$end_day_str = date_format($end_day , 'Y年m月d日');
		// 終了までの日数
		$end_time = $end_day_str.'23:59';
		$now_datetime = Carbon::now();
		// 残り日数
		$period = $end_day->diffInDays($now_datetime);
		// 目標金額
		$target_amount = $project->target_amount;
		// 達成率
		$percent_complete = floor($total_amount / $target_amount * 100);
		// 支援者数
		$supporter =  Support::where('reward_id', $reward_id)->count();
		// ログイン中のユーザ情報を取得
		$user = User::Where('id', $user_id)->get();
		// card_infoテーブルからIDに紐づくカード情報を取得
		$payment = Card::where('user_id', $user_id)->get();
		//カード番号下4桁み表示
		$reg_card_list = array();

		for($i = 0; $i < count($payment); $i++){
		$str = $payment[$i]->card_no;
		$ptn = "/([0-9]{12})([0-9]{4})/";
		$rep = "********$2";
		$reg_card_no = preg_replace($ptn, $rep, $str);
		$reg_card_list[] = $reg_card_no;
		}

		return view('projects.selected_support',
		[
			'project' => $project,
			'total_amount' => $total_amount,
			'supporter_list' => $supporter_list,
			'period' => $period,
			'end_time' => $end_time,
			'percent_complete' => $percent_complete,
			'reward' => $reward,
			'supporter' => $supporter,
			'users' => $user,
			'payment' => $payment,
			'total_amount' => $total_amount,
			'supporter_list' => $supporter_list,
			'reg_card_list' => $reg_card_list,
		]);
	}

	public function storeSelectedReward(Request $request) {

		//view側へ値を渡す処理
		return view('projects.selected_support');
	}


	public function confirmSelectedReward (SupportRequest $request,$id,$reward_id)
	{
		//ユーザIDを取得
		$user_id = Auth::id();
		//リクエスト内容を格納
		$support_data = $request->all();
		//二重送信防止
		$request->session()->regenerateToken();
		//配送先保存にチェックが入っている場合の処理
		if($request->address_check != NULL) {
			//POSTで取得したデータを配列に格納
			$user_data = [
				'name' => $request->name,
				'name_kana' => $request->name_kana,
				'tel' => $request->tel,
				'post_code' => $request->post_code,
				'address' => $request->address,
				'building' => $request->building,
			];
			//usersテーブルからログインユーザIDの一致するものを探し、データを上書き
			User::where('id', $user_id)->update($user_data);
		}

		//カード情報保存にチェックが入っている場合の処理
		if($request->card_check != NULL) {
			//createメソッドでcard_infoテーブルにRequestで受けとった情報を保存
			$card_data = Card::create([
				'user_id' => $user_id,
				'card_no' => $request->card_no,
				'exp_mon' => $request->exp_mon,
				'exp_year' => $request->exp_year,
				'card_csv' => $request->card_csv,
				'card_holder_name' => $request->card_holder_name,
			]);
		}

		//確認ページに$support_data(Requestで受けとったデータ)とpj_id,reward_idを渡す
		return view('projects.support_confirm', $support_data,[
			'pj_id' => $id,
			'reward_id' => $reward_id,
		]);
	}


	public function completeSelectedReward (Request $request,$id,$reward_id)
	{
		//ユーザIDを取得
		$user_id = Auth::id();
		//受け取ったリクエスト内容を格納
		$support_data = $request->all();

		//戻るボタン押下時、リクエスト内容を持たせて入力画面へリダイレクト
		if($request->action === 'back') {
			// return back()->withInput([$support_data,]);
			return redirect()->route('selected', [
				'id' => $id,
				'reward_id' => $reward_id,
			])->withInput([$support_data,]);
		}

		// var_dump($request->name);
		// exit;

		//createメソッドでcard_infoテーブルにRequestで受けとった情報を保存
		$data = Support::create([
			'user_id' => $user_id,
			'comment' => $request->comment,
			'reward_id' => $request->reward_id,
			'pj_id' => $request->pj_id,
			'card_no' => $request->card_no,
			'name' => $request->name,
			'name_kana' => $request->name_kana,
			'post_code' => $request->post_code,
			'address' => $request->address,
			'building' => $request->building,
			'tel' => $request->tel,
		]);

		//二重送信防止
		$request->session()->regenerateToken();
		//ログインユーザのメールアドレスにメールを送信
		Mail::to(Auth::user()->email)->send(new SupportConfirm($support_data));

		//支援完了ページに$support_data(Requestで受けとったデータ)を渡す
		return view('projects.support_complete', $support_data);
	}
}
