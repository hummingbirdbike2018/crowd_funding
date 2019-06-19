<?php

use Illuminate\Database\Seeder;

class RewardsTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('rewards')->insert([
					'pj_id' => 1,
					'reward_id' => 1,
					'rw_title' => 'リターン1',
					'rw_body' => '＜リターンの詳細について＞',
					'rw_image' => 'reward_image.jpg',
					'rw_quantity' => '300',
					'rw_price' => '10000',
					'rw_season' => '2019年8月',
			]);
		}
}
