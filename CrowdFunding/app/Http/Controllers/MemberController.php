<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
	public function index () {
		$members = Member::all();	//Memberモデルのallクラスメソッドで全ての会員情報を取得

		return view('mypage',
		[
			'members' => $members	//view関数でmypageに上で取得した情報をmembersをキーとして渡す
		]);
	}
}
