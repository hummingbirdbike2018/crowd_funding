<?php

namespace App\Http\Controllers\Auth;

use App\Mail\EmailVerification;
use App\User;
use App\Premember;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Register Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users as well as their
	| validation and creation. By default this controller uses a trait to
	| provide this functionality without requiring any additional code.
	|
	*/

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
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
			$this->middleware('guest');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return \App\Premember
	 */
	protected function create(array $data)
	{
		$hours = 1;

		$premember = Premember::create([
			'email' => $data['email'],
			'password' => Hash::make($data['password']),
			'token' => base64_encode($data['email']),
			'status' => Premember::SEND_MAIL,
			'expiration_datetime' => Carbon::now()->addHours($hours),
		]);

		$email = new EmailVerification($premember);
		Mail::to($premember->email)->send($email);

		return $premember;
	}

	public function register(Request $request)
	{
		event(new Registered($premember = $this->create($request->all())));

		return view('auth.registered');
	}

	public function showForm($email_token)
	{
		// 使用可能なトークンか確認する
		if (!Premember::where('token', $email_token)->exists())
		{
			return view('top')->with('message', '無効なトークンです。');
		}
		else
		{
			$premember = Premember::where('token', $email_token)->first();
			// 本登録済みユーザーか確認する
			if ($premember->status == Premember::REGISTER)
			{
				logger("status". $premember->status );
				return view('top')->with('message', 'すでに本登録されています。ログインして利用してください。');
			}
			// ユーザーステータスを更新する
			$premember->status = Premember::REGISTER;

			// ユーザテーブルに登録する
			$user = User::create([
				'user_id' => $premember->id,
				'email' => $premember->email,
				'password' => $premember->password,
			]);

			if($premember->save() && $user->save())
			{
				return view('top', compact('email_token'));
			}
			else
			{
				return view('top')->with('message', 'メール認証に失敗しました。再度、メールからリンクをクリックしてください。');
			}
		}
	}
}
