<?php

use Illuminate\Database\Seeder;

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
				'first_name' => 'TARO',
				'last_name' => 'YAMADA',
				 //bcryptで暗号化
				 'card_csv' => bcrypt('123'),
		]);
	}
}
