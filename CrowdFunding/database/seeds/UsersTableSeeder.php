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
				'id' => 1,
				'display' => 'user_name',
				'email' => 'test@email.com',
				'password' => bcrypt('test1234'),
				'name' => '鈴木',
				'name_kana' => 'すずき',
				'tel' => '03-1234-1234',
				'post_code' => '111-0000',
				'address' => '東京都',
				'building' => 'xxマンション',
				'disable' => 0,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]);
		}
}
