<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	/**
	* ログイン後の処理
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  mixed  $user
	* @return \Illuminate\Http\Response
	*/
	protected function authenticated(Request $request)
	{
		return back()->with('flash_message', __('ログインしました。'));
	}

	/**
	 * ログアウト処理
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function logout(Request $request)
	{
		$this->guard()->logout();
		$request->session()->invalidate();

		// ログアウトしたら、TOPへ移動
		return $this->loggedOut($request) ?: redirect('/')->with('flash_message', __('ログアウトしました。'));
	}
}
