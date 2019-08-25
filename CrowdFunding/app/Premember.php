<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premember extends Model
{
	const SEND_MAIL = 0;   // 仮会員登録のメール送信
	const MAIL_VERIFY = 1; //メールアドレス認証
	const REGISTER = 2;    // 本会員登録完了

	protected $table = 'premembers';

	protected $fillable = [
		'email',
		'password',
		'token',
		'status',
		'expiration_datetime',
	];

	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);
	}

	public static function build($email, $hours = 1)
	{
		$emailVerification = new self([
			'email' => $email,
			'password' => $password,
			'token' => str_random(250),
			'status' => self::SEND_MAIL,
			'expiration_datetime' => Carbon::now()->addHours($hours),
		]);
		return $emailVerification;
	}
}
