<?php

namespace App\Http\Controllers;

use App\Project;
use App\Reward;
use App\Support;
use App\User;
use App\Card;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
	public function index (int $id) {
		// プロジェクトを取得
		$project = Project::find($id);
		// プロジェクトIDに紐づくリワードテーブルを取得
		$reward = Reward::where('pj_id', $id)->get();

		$total_amount   = 0;			// 総支援額
		$supporter_list = array();		// Rewardごとの支援者数を格納する配列
		$stock_list     = array();		// Rewardごとの残り個数を格納する配列

		for($i = 0; $i < $reward->count(); $i++) {
			$supporter_list[] = Support::where('reward_id', $id++)->get()->count();
			$total_amount += $reward[$i]['rw_price'] * $supporter_list[$i];
			$stock_list[] = $reward[$i]['rw_quantity'] - $supporter_list[$i];
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


	public function showSelectedReward($id,$reward_id) {

		// プロジェクトを取得
		$project = Project::find($id);
		// 選択されたリターンIDに紐づくリワードテーブルを取得
		$reward = Reward::where('id', $reward_id)->get();
		var_dump($reward);
		exit;
		// プロジェクトの開始日
		$start_day = new Carbon($project->created_at);
		// プロジェクトの終了日
		$end_day = new Carbon($project->created_at);
		$end_day->addDay($project->period);
		$end_day_str = date_format($end_day , 'Y年m月d日');
		$end_time = $end_day_str.'23:59';									// 終了までの日数
		$period = $start_day->diffInDays($end_day); 						// 残り日数
		$target_amount = $project->target_amount; 							// 目標金
		$percent_complete = floor($project->target_amount / $target_amount * 100);	// 達成率
		$supporter =  Support::where('reward_id', $reward_id)->count();//支援者数

		$selected_user = Auth::user(); //ログインのユーザを取得
		$user = User::Where('id', $selected_user->id)->get(); //ユーザーID

		//view側へ値を渡す処理
		return view('projects.selected_support',
		[
			'project' => $project,
			'period' => $period,
			'end_time' => $end_time,
			'percent_complete' => $percent_complete,
			'rewards' => $reward,
			'supporter' => $supporter,
			'users' => $user
		]);
	}


	public function confirmSelectedReward (Request $request,$reward_id) {

		//
		$reward = Reward::where('id', $reward_id)->get();
		//二重送信防止
		$request->session()->regenerateToken();

		//配送先情報にチェックが入っている場合の処理
		if($request->address_check != null) {
			$user = new User();
			$user->name = $request->name;
			$user->name_kana = $request->name_kana;
			$user->tel = $request->tel;
			$user->post_code = $request->post_code;
			$user->address = $request->address;
			$user->building = $request->building;
			$user->email = $request->email;
			$user->update();
		}

		return view('projects.support_confirm',
		[
			'rewards' => $reward,
			'request' => $request,
		]);
	}


	public function paySelectedReward (Request $request,$reward_id) {
		 //ログインのユーザidを取得
		$selected_user = Auth::user()->id;
		// 選択されたリターンIDに紐づくリワードテーブルを取得
		$reward = Reward::where('id', $reward_id)->get();
		//ユーザーIDに紐づくカード情報をcard_infoテーブルから取得
		$payment = Card::where('user_id', $selected_user)->get();
		// // var_dump($payment);
		// exit;


		//カード情報保存にチェックが入っている場合の処理
		if($request->card_check != null) {
			$card = new Card();
			$card->card_no = $request->card_no;
			$card->exp_mon = $request->exp_mon;
			$card->exp_year = $request->exp_year;
			$card->card_csv = $request->card_csv;
			$card->first_name = $request->first_name;
			$card->last_name = $request->last_name;
			$card->save();
		}

		return view('projects.support_payment',
		[
			'rewards' => $reward,
			'payments' => $payment,
		]);
	}


	public function completeSelectedReward (Request $request, $reward_id) {

		// 選択されたリターンIDに紐づくリワードテーブルを取得
		$reward = Reward::where('id', $reward_id)->get();

		return view('projects.support_complete',
		[
			'rewards' => $reward,
		]);
	}
}
