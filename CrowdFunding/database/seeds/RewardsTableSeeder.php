<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
			[
				'id' => 1,
				'pj_id' => 1,
				'rw_title' => 'リターン1',
				'rw_body' => '＜リターンの詳細について＞',
				'rw_image' => 'reward_image.jpg',
				'rw_quantity' => '300',
				'rw_price' => '10000',
				'rw_season' => '2019年8月',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 2,
				'pj_id' => 1,
				'rw_title' => 'リターン2',
				'rw_body' => '＜リターンの詳細について＞',
				'rw_image' => 'reward_image.jpg',
				'rw_quantity' => '500',
				'rw_price' => '20000',
				'rw_season' => '2019年8月',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 3,
				'pj_id' => 2,
				'rw_title' => 'リターン1',
				'rw_body' => '＜リターンの詳細について＞',
				'rw_image' => 'reward_image.jpg',
				'rw_quantity' => '200',
				'rw_price' => '15000',
				'rw_season' => '2019年8月',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		]);
	}
}
