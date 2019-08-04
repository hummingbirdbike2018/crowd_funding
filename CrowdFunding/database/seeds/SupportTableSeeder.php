<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SupportTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('supports')->insert([
			[
				'user_id' => 1,
				'reward_id' => 1,
				'pj_id' => 1,
				'comment' => '商品の到着楽しみです！',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'user_id' => 1,
				'reward_id' => 1,
				'pj_id' => 2,
				'comment' => '商品の到着楽しみです！',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'user_id' => 1,
				'reward_id' => 2,
				'pj_id' => 1,
				'comment' => '商品の到着楽しみです！',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		]);
	}
}
