<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SupportConfirm extends Mailable
{
		use Queueable, SerializesModels;

		/**
		* Create a new message instance.
		*
		* @return void
		*/
		// 引数で受け取ったデータ用の変数
		protected $support_data;


		public function __construct($support_data)
		{
			// 引数で受け取ったデータを変数にセット
			$this->support_data = $support_data;
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
			 ->subject('支援内容の確認') // メールタイトル
			 ->view('projects.support_mail') // どのテンプレートを呼び出すか
			 ->with($this->support_data); // withオプションでセットしたデータをテンプレートへ受け渡す
		}
}
