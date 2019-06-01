<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('users')->insert([
				'user_id' => 2,
				'email' => 'test@email.com',
				'password' => bcrypt('test1234'),
				'display' => 'user_name',
				'name' => '高橋',
				'furigana' => 'たかはし',
				'tel' => '0312341234',
				'post_code' => '1110000',
				'address' => '東京都',
				'building' => 'xxマンション',
				'disable' => 0,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]);
		}
}
