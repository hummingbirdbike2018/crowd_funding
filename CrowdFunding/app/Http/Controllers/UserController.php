<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

	public function index (int $id) {

		$selected_user = User::Find($id); //全てのユーザを取得
		$user = User::Where('user_id', $selected_user->id)->get(); //ユーザーID

		return view('user/edit',
		[
			'users' => $user	//view関数でmypageに上で取得した情報をusersをキーとして渡す
		]);
	}


	public function store (Request $request) {

		//リクエストされたuer_idで会員情報を取得
		$user = new User();

		//編集対象の会員データに入力値を保存
		$user->display = $request->display;
		$user->name = $request->name;
		$user->furigana = $request->furigana;
		$user->tel = $request->tel;
		$user->post_code = $request->post_code;
		$user->address = $request->address;
		$user->building = $request->building;
		$user->email = $request->email;
		$user->password = $request->password;
		$user->save();

		//
		return view('変更を保存しました。');
	}
}
