<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
	// public function index (int $pj_id) {
	//
	// 	$selected_project = Project::Find($pj_id); //全てのプロジェクトを取得
	// 	$project = Project::Where('pj_id', $selected_project->pj_id)->get();
	//
	// 	return view('projects/{pj_id}',
	// 	[
	// 		'projects' => $project	//view関数でmypageに上で取得した情報をusersをキーとして渡す
	// 	]);
	public function index() {
		return view('projects/description');
	}
}
