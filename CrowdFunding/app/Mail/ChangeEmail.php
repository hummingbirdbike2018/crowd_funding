<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChangeEmail extends Mailable
{
		use Queueable, SerializesModels;

		/**
		 * Create a new message instance.
		 *
		 * @return void
		 */

		protected $user_name;

		public function __construct($user_name)
		{
				// 引数で受け取ったデータを変数にセット
				$this->user_name = $user_name;
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
				->subject('メールアドレスの変更確認') // メールタイトル
				->view('user.confirm_mail') // どのテンプレートを呼び出すか
				->with($this->user_name) // withオプションでセットしたデータをテンプレートへ受け渡す
		}
}
