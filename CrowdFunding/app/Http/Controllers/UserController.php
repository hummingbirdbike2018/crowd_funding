<?php

namespace App\Http\Controllers;

use App\User;
use App\Support;
use App\Project;
use App\Reward;
use App\Http\Requests\UserBasicRequest;
use App\Http\Requests\UserAddressRequest;
use App\Mail\ChangeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

	public function showUserMenu () {

		return view('user.top',[]);
	}


	public function showBasicInfo () {

		$user = User::find(Auth::id());//userテーブルから情報取得

		return view('user.edit_basic',[
			'user' => $user,
		]);
	}

	public function storeBasicInfo (UserBasicRequest $request) {

		//userテーブルから情報取得
		$user = User::find(Auth::id());

		$user_basic = [
			'display' => $request->display,
		];

		//パスワードの変更処理
		$hush = $user->password;
		$input_password = $request->password;

		if((isset($request->new_password) && password_verify ($input_password, $hush) === TRUE)) {
			$user_basic = array_merge($user_basic, array('password' => bcrypt($request->new_password)));
		}
		//登録されているメールアドレスと異なるものが送信された場合、確認メールを送信
		if(isset($request->email) && strcmp($user->email, $request->email) != 0) {
			Mail::to($request->email)->send(new ChangeEmail);
		}

		//受け取ったリクエストで上書き
		User::where('id', Auth::id())->update($user_basic);

		// 画像の保存先
		$img_file = $request->user_img;

		if(isset($img_file)) {
			$file_path = $img_file->store('storage/user_img/user_'.Auth::user()->id);
			$user->user_img = str_replace('storage/user_img/user_'.Auth::user()->id,  '', $file_path);
			$user->save();
			return redirect("/user/top/edit_basic");
		}

		return view('user.edit_basic',[
			'user' => $user,
		]);
	}

	public function showShippingAddress () {

		$user = User::find(Auth::id());

		return view('user.edit_address',[
			'user' => $user,
		]);
	}



	public function storeShippingAddress (UserAddressRequest $request) {

		$user = User::find(Auth::id());

		//POSTで受けとったデータを配列に格納
		$user_address = [
			'name' => $request->name,
			'name_kana' => $request->name_kana,
			'tel' => $request->tel,
			'post_code' => $request->post_code,
			'address' => $request->address,
			'building' => $request->building,
		];

		//フォームに入力された内容をDBに上書き
		User::where('id', Auth::id())->update($user_address);
		return redirect("/user/top/edit_address");

		return view('user.edit_address',[
			'user' => $user,
		]);
	}

	public function showSupportList () {

		$user = Auth::id(); //ログインのユーザを取得



		//サポートテーブルに紐づいた支援情報を取得
		$support_list = Support::select()
							->join('projects', 'projects.id', '=', 'supports.pj_id')
							->join('rewards', 'rewards.id', '=', 'supports.reward_id')
							->where('user_id', $user)
							->get();


		//カード番号下4桁のみ表示
		for($i=0; $i<count($support_list); $i++){
			$str = $support_list[$i]->card_no;
			$ptn = "/([0-9]{12})([0-9]{4})/";
			$rep = "********$2";
			$reg_card_no[] = preg_replace($ptn, $rep, $str);
		}

			//
			// var_dump($supports);
			// exit;

		return view('user.support_list',[
			'user' => $user,
			'support_list' => $support_list,
			'card_no' => $reg_card_no,
			'supports' => $supports,
		]);
	}

	public function showDisable () {

		$user = Auth::id(); //ログインのユーザを取得

		return view('user.disable',[
			'user' => $user,
		]);
	}

	public function showDisableConfirm () {

		$user = Auth::id(); //ログインのユーザを取得

		return view('user.disable_confirm',[
			'user' => $user,
		]);
	}


	public function showDisableComplete () {

		$user = Auth::id(); //ログインのユーザを取得

		return view('user.disable_complete',[
			'user' => $user,
		]);
	}
}
