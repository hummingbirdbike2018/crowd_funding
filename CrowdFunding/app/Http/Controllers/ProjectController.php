<?php

namespace App\Http\Controllers;

use App\Project;
use App\Reward;
use App\Support;
use Carbon\Carbon;

use Illuminate\Http\Request;


class ProjectController extends Controller
{
	public function index (int $id) {
		// プロジェクトを取得
		$project = Project::find($id);
		// プロジェクトIDに紐づくリワードテーブルを取得
		$reward = Reward::where('pj_id', $id)->get();
		// サポートテーブルを取得
		$support = Support::where('reward_id', $id)->get();

		// プロジェクトの開始日
		$start_day = new Carbon($project->created_at);
		$start_day_str = date_format($start_day , 'Y年m月d日');
		// プロジェクトの終了日
		$end_day = new Carbon($project->created_at);
		$end_day->addDay($project->period);
		$end_day_str = date_format($end_day , 'Y年m月d日');

		$total_amount = $reward[0]['rw_price'] * $total_supporter;			// 総支援額
		$end_time = $end_day_str.'23:59';									// 終了までの日数
		$period = $start_day->diffInDays($end_day); 						// 残り日数
		$target_amount = $project->target_amount; 							// 目標金
		$percent_complete = floor($total_amount / $target_amount * 100);	// 達成率

		$total_supporter = $support->count();								// 総支援者数
		$stock = $reward[0]['rw_quantity'] - $total_supporter;				// 残り個数

		//view側へ値を渡す処理
		return view('projects/description',
		[
			'project' => $project,
			'total_amount' => $total_amount,
			'total_supporter' => $total_supporter,
			'period' => $period,
			'end_time' => $end_time,
			'percent_complete' => $percent_complete,
			'rewards' => $reward,
			'stock' => $stock,
		]);
	}
}
