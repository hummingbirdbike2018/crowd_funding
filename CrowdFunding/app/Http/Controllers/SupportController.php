<?php

namespace App\Http\Controllers;

use App\Reward;
use App\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{

	public function index (int $id) {

		$selected_support = Support::Find($id); //全てのプロジェクトを取得
		$support = Support::Where('id', $selected_reward->id)->get();

		//view側へ値を渡す処理
		return view('projects/description',
		[
			'supports' => $support,
		]);
	}
}