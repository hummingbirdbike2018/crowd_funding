<?php

namespace App\Http\Controllers;

use App\Draft;
use Illuminate\Http\Request;

class DraftController extends Controller
{
	public function index()
	{
			return view('draft');
	}

	//プロダクト系起案フォームデータ処理
	public function store(Request $request)
	{
		//変数の中身を配列で取得し、exitで強制終了
		// var_dump($request->all());
		// exit;

		//インスタンス
		$draft = new Draft();

		//編集対象の会員データに入力値を保存
		$draft->name = $request->name;
		$draft->pj_title = $request->pj_title;
		$draft->email = $request->email;
		$draft->target_amount = $request->target_amount;
		$draft->overview = $request->overview;
		//inputで入力値がない場合、第二引数の値を返す
		$draft->image_url = $request->input('image_url', '');
		$draft->return = $request->input('return', '');
		$draft->faq1 = $request->input('faq1', '');
		$draft->faq2 = $request->input('faq2', '');
		$draft->save();

		return view('/');
	}


	//プロダクト以外起案フォームデータ処理
	public function store2(Request $request)
	{

		//インスタンス
		$draft = new Draft();

		//編集対象の会員データに入力値を保存
		$draft->name = $request->name;
		$draft->pj_title = $request->pj_title;
		$draft->email = $request->email;
		$draft->tel = $request->tel;
		$draft->overview = $request->overview;
		$draft->profile = $request->profile;
		$draft->job = $request->job;
		$draft->howto = $request->howto;
		$draft->image_url = $request->input('image_url', '');
		$draft->twitter = $request->input('twitter', '');
		$draft->facebook = $request->input('facebook', '');
		$draft->instagram = $request->input('instagram', '');
		$draft->web_page = $request->input('web_page', '');
		$draft->faq1 = $request->input('faq1', '');
		$draft->faq2 = $request->input('faq2', '');
		$draft->save();

		return view('/');
	}

	public function confirm()
	{
			return view('draft.confirm');
	}

	public function complete()
	{
			return view('draft.complete');
	}


}
