<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DisableComplete extends Mailable
{
		use Queueable, SerializesModels;

		/**
		 * Create a new message instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
				//
		}

		/**
		 * Build the message.
		 *
		 * @return $this
		 */
		public function build()
		{
			return $this
			 ->from('info@crowdfunding.com') // 送信元
			 ->subject('退会手続き完了のお知らせ') // メールタイトル
			 ->view('user.disable_mail'); // どのテンプレートを呼び出すか
		}
}
