<?php

namespace App\Http\Controllers;

use App\User;
use App\Support;
use App\Project;
use App\Reward;
use App\Http\Requests\UserBasicRequest;
use App\Http\Requests\UserAddressRequest;
use App\Mail\ChangeEmail;
use App\Mail\DisableComplete;
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

		return view('user.support_list',[
			'user' => $user,
			'support_list' => $support_list,
			'card_no' => $reg_card_no,
		]);
	}

	public function showDisable () {

		$user = Auth::id(); //ログインのユーザを取得

		return view('user.disable',[
			'user' => $user,
		]);
	}

	public function storeDisable (Request $request) {
		//ログインのユーザを取得
		$user = Auth::user();
		//二重送信防止
		$request->session()->regenerateToken();
		//キャンセルボタン押下時、会員メニュー画面へリダイレクト
		if($request->action === 'back') {
			return redirect()->route('user.top');
		}

		//退会ボタン押下時、論理削除を実行、確認のメールを送信。その後、退会完了画面へリダイレクト
		if($request->action === 'next') {
			//論理削除
			User::find($user->id)->delete();
			//ログインユーザのメールアドレスにメールを送信
			Mail::to($user->email)->send(new DisableComplete());
			return redirect()->route('top');
		}

		return view('user.disable',[
			'user' => $user,
		]);
	}
}
