<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
	public function index (int $id) {

		$selected_project = Project::Find($id); //全てのプロジェクトを取得
		$project = Project::Where('planner_id', $selected_project->pj_id)->get();
		$total_amount = 200000;//仮
		$total_supporter = 100;//仮
		$period = 10;//仮
		$end_time = "23:59";//仮
		$target_amount = $selected_project->target_amount;
		$percent_complete = floor($total_amount / $target_amount * 100);//仮
		// var_dump($selected_project->product_img_1);
		// exit;

		//view側へ値を渡す処理
		return view('projects/description',
		[
			'projects' => $project,
			'total_amount' => $total_amount,
			'total_supporter' => $total_supporter,
			'period' => $period,
			'end_time' => $end_time,
			'percent_complete' => $percent_complete,
		]);
	}
}
