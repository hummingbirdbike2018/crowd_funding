<?php

namespace App\Http\Controllers;

use App\Project;
use App\Reward;
use App\Support;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
	public function index (int $id) {
		// プロジェクトを取得
		$project = Project::find($id);
		// プロジェクトIDに紐づくリワードテーブルを取得
		$reward = Reward::where('pj_id', $id)->get();
		// サポートテーブルを取得
		$support = Support::where('pj_id', $id)->get();
		// プロジェクトの開始日
		$start_day = new Carbon($project->created_at);
		$start_day_str = date_format($start_day , 'Y年m月d日');
		// プロジェクトの終了日
		$end_day = new Carbon($project->created_at);
		$end_day->addDay($project->period);
		$end_day_str = date_format($end_day , 'Y年m月d日');
		//リターン毎の支援者数
		//プロジェクトIDに紐づくリターン数を取得
		$get_reward = $reward->count();
		$supporter = Support::where('reward_id', $reward[0]['id'])
																					->where('pj_id', $id)
																					->count();
		$total_supporter = $support->count();								// 総支援者数
		$total_amount = $reward[0]['rw_price'] * $total_supporter;			// 総支援額
		$end_time = $end_day_str.'23:59';									// 終了までの日数
		$period = $start_day->diffInDays($end_day); 						// 残り日数
		$target_amount = $project->target_amount; 							// 目標金
		$percent_complete = floor($total_amount / $target_amount * 100);	// 達成率
		// 残り個数
		$stock = $reward[0]['rw_quantity'];
			if($stock === 0){
				return view('SOLD OUT');
		}
		// var_dump($stock);
		// exit;

		//view側へ値を渡す処理
		return view('projects/description',
		[
			'project' => $project,
			'total_amount' => $total_amount,
			'total_supporter' => $total_supporter,
			'supporter' => $supporter,
			'get_reward' => $get_reward,
			'period' => $period,
			'end_time' => $end_time,
			'percent_complete' => $percent_complete,
			'rewards' => $reward,
			'stock' => $stock,
		]);
	}
}
