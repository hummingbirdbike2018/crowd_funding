<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerification extends Mailable
{
	use Queueable, SerializesModels;

	protected $premember;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($premember)
	{
		$this->premember = $premember;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		return $this
			->subject('【site】仮登録が完了しました')
			->view('auth.pre_register')
			->with(['token' => $this->premember->token,]);
	}
}
