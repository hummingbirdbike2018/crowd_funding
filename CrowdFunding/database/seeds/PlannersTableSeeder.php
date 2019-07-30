<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlannersTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('planners')->insert([
				'id' => 1,
				'email' => 'planner1@email.com',
				'password' => bcrypt('test1234'),
				'name' => '株式会社クラウドファンディング',
				'name_kana' => 'カブシキガイシヤクラウドファンディング',
				'icon_img' => 'public/storage/planner_icon1.jpg',
				'tel' => '03-1234-1234',
				'post_code' => '111-0000',
				'address' => '東京都',
				'building' => 'xxビル1F',
				'intro' => '株式会社クラウドファンディングは創業〇〇年の歴史をもつ企業です。\r\n 革新的なサービス、プロダクトを皆様にご提供できるよう精進して参ります。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]);
		}
}
