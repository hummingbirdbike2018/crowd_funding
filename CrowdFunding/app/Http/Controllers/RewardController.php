<?php

namespace App\Http\Controllers;

use App\Support;
use App\Reward;
use App\Project;
use Illuminate\Http\Request;

class RewardController extends Controller
{

	// public function index (int $id) {
	//
	// 	$selected_reward = Reward::Find($id); //全てのプロジェクトを取得
	// 	$reward = Reward::Where('reward_id', $selected_reward->id)->get();
	// 	$r_quantity = $selected_reward->quantity - $support;
	//
	// 	//view側へ値を渡す処理
	// 	return view('projects/reward',
	// 	[
	// 		'rewards' => $reward,
	// 		'support' => $support,
	// 		'r_quantity' => $r_quantity,
	// 	]);
	// }


}
