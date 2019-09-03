<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;
use App\Reward;
use App\Support;
use App\Planner;
use Carbon\Carbon;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		// リワードID、サポートID
		$id = 1;
		// DBからプロジェクトをすべて取得する
		$projects = Project::all();
		// 各プロジェクトの達成率を格納する配列
		$percent_completes = array();
		// 各プロジェクトの総支援額を格納する配列
		$total_amount_list = array();
		// 各プロジェクトの総支援者数を格納する配列
		$supporter_list = array();
		// 各プロジェクトの残り日数を格納する配列
		$period = array();
		// 起案者を格納する配列
		$planner_list = array();
		// 起案者テーブルとプロジェクトテーブルを結合する
		$planner = Planner::select()
			->join('projects', 'projects.planner_id', '=', 'planners.id')
			->get();

		// リワードテーブルとサポートテーブルを結合する
		$rewards = Reward::select()
			->join('supports', 'supports.reward_id', '=', 'rewards.id')
			->get();

		for($i = 0; $i < $projects->count(); $i++)
		{
			// 起案者を設定する
			$planner_list[] = $planner[$i]['name'];
			// 総支援者数を設定する
			$supporter_list[] = Support::where('pj_id', $id)->count();
			// 総支援額を設定する
			$total_amount_list[] = $rewards->where('pj_id', $id)->sum('rw_price');
			// 達成率を設定する
			$percent_completes[] = floor($total_amount_list[$i] / $projects[$i]->target_amount * 100);
			// 残り日数を設定する
			$end_day = new Carbon($projects[$i]->created_at);
			$end_day->addDay($projects[$i]->period);
			$now_datetime = Carbon::now();
			$period[] = $end_day->diffInDays($now_datetime);
			$id++;
		}

		// 起案者テーブルとプロジェクトテーブルを結合する
		$new_planner = Planner::select()
			->join('projects', 'projects.planner_id', '=', 'planners.id')
			->get();
		//30日以内に登録されたプロジェクトを取得
		$new_projects = Project::orderBy('created_at','desc')
			->whereRaw('created_at > now() - INTERVAL 30 DAY')
			->get();
		// 各プロジェクトの達成率を格納する配列
		$new_percent_completes = array();
		// 各プロジェクトの総支援額を格納する配列
		$new_total_amount_list = array();
		// 各プロジェクトの総支援者数を格納する配列
		$new_supporter_list = array();
		// 各プロジェクトの残り日数を格納する配列
		$new_period = array();
		// 起案者を格納する配列
		$new_planner_list = array();

		foreach($new_projects as $project) {
			// 新規プロジェクトに関連する起案者を取得
			$new_planner = Planner::where('id', $project->planner_id)->get();
			// 総支援者数を設定する
			$new_supporter_list[] = Support::where('pj_id', $project->id)->count();
			// 総支援額を設定する
			$new_total_amount_list[] = $rewards->where('pj_id', $project->id)->sum('rw_price');
		}
		for($i = 0; $i < $new_projects->count(); $i++)
		{
			// // 起案者を設定する
			// $new_planner_list[] = $new_planner[$i]['name'];
			// 達成率を設定する
			$new_percent_completes[] = floor($new_total_amount_list[$i] / $new_projects[$i]->target_amount * 100);
			// 残り日数を設定する
			$end_day = new Carbon($new_projects[$i]->created_at);
			$end_day->addDay($new_projects[$i]->period);
			$now_datetime = Carbon::now();
			$new_period[] = $end_day->diffInDays($now_datetime);

		}
// 			var_dump($new_planner);
// exit;

		// 達成率１００％以上のプロジェクトを取得
		// for($i = 0; $i < $projects->count(); $i++) {
		// 	if( < 100) {
		// 		continue;
		// 	}
		// 	var_dump($percent_completes);
		// 	exit;
		// 	// 起案者を設定する
		// 	$planner_list[] = $planner[$i]['name'];
		// 	// 総支援者数を設定する
		// 	$supporter_list[] = Support::where('pj_id', $id)->count();
		// 	// 総支援額を設定する
		// 	$total_amount_list[] = $rewards->where('pj_id', $id)->sum('rw_price');
		// 	// 達成率を設定する
		// 	$percent_completes[] = floor($total_amount_list[$i] / $projects[$i]->target_amount * 100);
		// 	// 残り日数を設定する
		// 	$end_day = new Carbon($projects[$i]->created_at);
		// 	$end_day->addDay($projects[$i]->period);
		// 	$now_datetime = Carbon::now();
		// 	$period[] = $end_day->diffInDays($now_datetime);
		// 	$id++;
		// }

		return view('top',
		[
			'projects' => $projects,
			'total_amounts' => $total_amount_list,
			'percent_completes' => $percent_completes,
			'period' => $period,
			'supporters' => $supporter_list,
			'planner_list' => $planner_list,
			'new_projects' => $new_projects,
			'new_planner' => $new_planner,
			'new_supporters' => $new_supporter_list,
			'new_total_amounts' => $new_total_amount_list,
			'new_percent_completes' => $new_percent_completes,
			'new_period' => $new_period,
		]);
	}

	public function contact()
	{
		return view('contact');
	}
}
