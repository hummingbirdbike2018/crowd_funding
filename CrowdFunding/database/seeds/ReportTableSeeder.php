<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReportTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('reports')->insert([
				[
					'id' => 1,
					'pj_id' => 1,
					'planner_id' => 1,
					'report_title' => '展示 and 試聴イベントについて（8/10 - 11）',
					'report_text_1' => 'こんにちは、BoCo株式会社です。
ご支援をいただきありがとうございます。
本日は、PEACEの展示 and 試聴イベントのお知らせをさせていただきます。

今週末 8/10-11 に開催される
Engadget夏祭り［https://japanese.engadget.com/2019/08/07/engadget/］
にて、PEACE をご体験していただくことができます。

当日は、動作モデルも試聴して頂けますので、是非、お越しください。
お待ちしております。

ご参加いただくには事前登録が必要です。
下記にてご登録ください。
https://eventregist.com/e/engadget-summer2019


◆SNSも更新中！
https://twitter.com/BoCo0362252099
https://www.facebook.com/EarsOpen.boco/',
					'report_img_1' => 'report_pic_1.jpg',
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now(),
				],
		]);
	}
}
