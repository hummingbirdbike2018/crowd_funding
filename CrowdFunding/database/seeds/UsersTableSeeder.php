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
			for($i = 1; $i <= 10; $i++) {
				DB::table('users')->insert([
					[
					'id' => $i,
					'display' => 'suz',
					'email' => 'test'.$i.'@email.com',
					'password' => bcrypt('test1234'),
					'name' => '鈴木',
					'name_kana' => 'すずき',
					'tel' => '03-1234-1234',
					'post_code' => '111-0000',
					'address' => '東京都',
					'building' => 'xxマンション',
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now(),
					]
			]);
		}
	}
}
