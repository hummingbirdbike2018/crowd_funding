<?php

namespace App\Http\Controllers;

use App\Project;
use App\Reward;
use App\Support;

use Illuminate\Http\Request;


class ProjectController extends Controller
{

	public function index (int $id) {

		$selected_project = Project::Find($id);  //全てのプロジェクトを取得
		$relation_reward = Project::find($id)->with('rewards')->get();
		// $relation_reward = Reward::Where('pj_id', $selected_project->pj_id)->get();//pj_idに紐づくリターンを取得
		$project = Project::Where('pj_id', $selected_project->pj_id)->get();//where(カラム名, 比較演算子(=の場合省略), 比較する値)
		$total_amount = 200000;//総支援額
		$total_supporter = 100;//総支援者数
		$period = $selected_project->period;//残り日数
		$end_time = '日'.'23:59';//終了までの日数
		$target_amount = $selected_project->target_amount;//目標金額
		$percent_complete = floor($total_amount / $target_amount * 100);//達成率
		$selected_reward = Reward::Find($id);
		$support = Support::where('reward_id', $selected_reward->reward_id)->get();
		$stock = 0;//残り個数

		// var_dump($relation_reward);
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
			'rewards' => $relation_reward,
			'supports' => $support,
			'stock' => $stock,

		]);
	}
}
