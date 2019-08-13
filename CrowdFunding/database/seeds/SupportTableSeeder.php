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
				'reward_id' => 2,
				'pj_id' => 1,
				'comment' => '素敵なデザイン、斬新なアイデアの商品でいつも広告を見るのが楽しみです。
				ワクワクをありがとうございます。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'user_id' => 2,
				'reward_id' => 3,
				'pj_id' => 1,
				'comment' => '難聴者の補聴器ご、なかなか日常的に本当に使える商品になっていない現状において、骨伝導での真の実用化に期待しています',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'user_id' => 3,
				'reward_id' => 1,
				'pj_id' => 1,
				'comment' => '商品の到着楽しみです！',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'user_id' => 4,
				'reward_id' => 6,
				'pj_id' => 2,
				'comment' => 'バッテリーのもち時間が気になりますが線からは解放されたい。可能な限り長時間使えるようにお願いします。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'user_id' => 5,
				'reward_id' => 4,
				'pj_id' => 2,
				'comment' => '商品の到着楽しみです！',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'user_id' => 1,
				'reward_id' => 5,
				'pj_id' => 2,
				'comment' => '商品の到着楽しみです！',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		]);
	}
}
