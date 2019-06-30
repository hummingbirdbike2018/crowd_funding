<?php

namespace App\Http\Controllers;

use App\Project;
use App\Reward;
use App\Support;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
		$period = $start_day->diffInDays($end_day); 						// 残り日数
		$target_amount = $project->target_amount; 							// 目標金
		$percent_complete = floor($total_amount / $target_amount * 100);	// 達成率

		//view側へ値を渡す処理
		return view('projects/support',
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


		public function getSelectedReward($id,$reward_id) {

			// プロジェクトを取得
			$project = Project::find($id);
			// 選択されたリターンIDに紐づくリワードテーブルを取得
			$reward = Reward::where('id', $reward_id)->get();
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




			//view側へ値を渡す処理
			return view('projects/selected_support',
			[
				'project' => $project,
				'period' => $period,
				'end_time' => $end_time,
				'percent_complete' => $percent_complete,
				'rewards' => $reward,
				'supporter' => $supporter,
			]);
		}
}
