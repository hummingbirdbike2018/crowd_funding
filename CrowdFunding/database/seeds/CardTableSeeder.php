<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CardTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('card_info')->insert([
				'user_id' => 1,
				'card_no' => 1234423156788765,
				'exp_mon' => 10,
				'exp_year' => 20,
				'card_holder_name' => 'TARO YAMADA',
				 //bcryptで暗号化
				 'card_csv' => bcrypt('123'),
				 'created_at' => Carbon::now(),
				 'updated_at' => Carbon::now(),

		]);
	}
}
