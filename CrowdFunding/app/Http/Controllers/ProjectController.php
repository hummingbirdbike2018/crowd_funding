<?php

namespace App\Http\Controllers;

use App\Project;
use App\Reward;
use App\Support;
use App\Planner;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
	public function index (int $id) {

		$project = Project::find($id);
		// プロジェクトidに紐づくユーザー情報とコメントを取得
		$users = User::select()
			->join('supports', 'supports.user_id', '=', 'users.id')
			->where('pj_id', $id)
			->get();
		// プロジェクトIDに紐づくreportsテーブルを取得
		$reports = $project->reports;
		//プロジェクトIDに紐づくrewardsテーブルを取得
		$rewards = $project->rewards;
		// プロジェクトIDに紐づくplannersテーブルを取得
		$planner = Planner::where('id', $project->planner_id)->first();
		 // 総支援額
		$total_amount = Reward::select()
				->join('supports', 'supports.reward_id', '=', 'rewards.id')
				->sum('rw_price');
		$supporter_list = array();		// Rewardごとの支援者数を格納する配列
		$stock_list     = array();		// Rewardごとの残り個数を格納する配列
		$itr = 1;
		for($i = 0; $i < $rewards->count(); $i++)
		{
			$supporter_list[] = Support::where('reward_id', $itr)
				->where('pj_id', $id)->count();
			$stock_list[] = $rewards[$i]['rw_quantity'] - $supporter_list[$i];
			$itr++;
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
		return view('projects/project_description',
		[
			'reports' => $reports,
			'users' => $users,
			'planner' => $planner,
			'project' => $project,
			'total_amount' => $total_amount,
			'supporter_list' => $supporter_list,
			'period' => $period,
			'end_time' => $end_time,
			'percent_complete' => $percent_complete,
			'rewards' => $rewards,
			'stock_list' => $stock_list,
		]);
	}
}
