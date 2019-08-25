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
		for($i = 1; $i <= 5; $i++) {
			DB::table('supports')->insert([
				[
					'user_id' => $i,
					'reward_id' => 1,
					'pj_id' => 1,
					'comment' => '素敵なデザイン、斬新なアイデアの商品でいつも広告を見るのが楽しみです。
					ワクワクをありがとうございます。',
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now(),
				],
		]);
	}
	for($i = 1; $i <= 5; $i++) {
		DB::table('supports')->insert([
			[
				'user_id' => $i,
				'reward_id' => 4,
				'pj_id' => 2,
				'comment' => '素敵なデザイン、斬新なアイデアの商品でいつも広告を見るのが楽しみです。
				ワクワクをありがとうございます。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
		]);
	}
	for($i = 1; $i <= 5; $i++) {
		DB::table('supports')->insert([
			[
				'user_id' => $i,
				'reward_id' => 7,
				'pj_id' => 3,
				'comment' => '素敵なデザイン、斬新なアイデアの商品でいつも広告を見るのが楽しみです。
				ワクワクをありがとうございます。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
		]);
	}
	for($i = 1; $i <= 5; $i++) {
		DB::table('supports')->insert([
			[
				'user_id' => $i,
				'reward_id' => 10,
				'pj_id' => 4,
				'comment' => '素敵なデザイン、斬新なアイデアの商品でいつも広告を見るのが楽しみです。
				ワクワクをありがとうございます。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
		]);
	}
	for($i = 1; $i <= 5; $i++) {
		DB::table('supports')->insert([
			[
				'user_id' => $i,
				'reward_id' => 13,
				'pj_id' => 5,
				'comment' => '素敵なデザイン、斬新なアイデアの商品でいつも広告を見るのが楽しみです。
				ワクワクをありがとうございます。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
		]);
	}
	for($i = 1; $i <= 5; $i++) {
		DB::table('supports')->insert([
			[
				'user_id' => $i,
				'reward_id' => 16,
				'pj_id' => 6,
				'comment' => '素敵なデザイン、斬新なアイデアの商品でいつも広告を見るのが楽しみです。
				ワクワクをありがとうございます。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
		]);
	}
	for($i = 1; $i <= 5; $i++) {
		DB::table('supports')->insert([
			[
				'user_id' => $i,
				'reward_id' => 19,
				'pj_id' => 7,
				'comment' => '素敵なデザイン、斬新なアイデアの商品でいつも広告を見るのが楽しみです。
				ワクワクをありがとうございます。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
		]);
	}
	}
}
