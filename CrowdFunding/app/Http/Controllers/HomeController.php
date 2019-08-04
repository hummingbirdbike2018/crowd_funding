<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;
use App\Reward;
use App\Support;
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

		for($i = 0; $i < $projects->count(); $i++)
		{
			// 総支援者数を設定する
			$supporter_list[] = Support::where('reward_id', $id)->count();
			// 総支援額を設定する
			$total_amount_list[] = Reward::where('pj_id', $id)->sum('rw_price');;
			// 達成率を設定する
			$percent_completes[] = floor($total_amount_list[$i] / $projects[$i]->target_amount * 100);
			// 残り日数を設定する
			$end_day = new Carbon($projects[$i]->created_at);
			$end_day->addDay($projects[$i]->period);
			$now_datetime = Carbon::now();
			$period[] = $end_day->diffInDays($now_datetime);
			$id++;
		}

		return view('top',
		[
			'projects' => $projects,
			'total_amounts' => $total_amount_list,
			'percent_completes' => $percent_completes,
			'period' => $period,
			'supporters' => $supporter_list
		]);
	}

	public function contact()
	{
		return view('contact');
	}
}
