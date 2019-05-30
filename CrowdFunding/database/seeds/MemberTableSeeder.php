<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MemberTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('member')->insert([
				'user_id' => 1,
				'email' => 'test@email.com',
				'password' => bcrypt('test1234'),
				'display' => 'てすと',
				'name' => '鈴木',
				'furigana' => 'すずき',
				'tel' => '0312341234',
				'post_code' => '1110000',
				'address' => '東京都',
				'building' => 'マンション101',
				'disable' => 0,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]);
		}
}
