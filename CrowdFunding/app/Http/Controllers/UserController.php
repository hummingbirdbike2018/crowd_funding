<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

	public function index () {

		$selected_user = Auth::id(); //ログインのユーザを取得
		$user = User::Where('user_id', $selected_user)->get(); //ユーザーID

		return view('projects/selected_support',
		[
			'users' => $user	//view関数でmypageに上で取得した情報をusersをキーとして渡す
		]);
	}


	public function store (Request $request) {

		//POSTで受けとったデータを配列に格納
		$user_data = [
			'display' => $request->display,
			'name' => $request->name,
			'name_kana' => $request->name_kana,
			'tel' => $request->tel,
			'post_code' => $request->post_code,
			'address' => $request->address,
			'building' => $request->building,
			'email' => $request->email,
			'password' => $request->password
		];
		//フォームに入力された内容をDBに上書き
		User::where('id', Auth::id())->update($user_data);
	}


	public function image(Request $request) {

			//ログイン中のuer_idを取得
			$selected_user = Auth::user()->id;
			//
			$user = User::where('id', $selected_user);
			//画像の保存先
			$user->user_image = $request->user_image->storeAs('public/storage', $time.'_'.Auth::user()->id . '.jpg');
			//保存
			$user->save();
			//「設定する」をクリックしたら会員情報変更ページへリダイレクト
			return redirect()->route('user.edit', [
					'id' => $user->id,
			 ]);
		}
	}
