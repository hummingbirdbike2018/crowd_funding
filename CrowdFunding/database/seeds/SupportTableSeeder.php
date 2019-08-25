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
		for($i = 1; $i <= 200; $i++) {
			DB::table('supports')->insert([
				[
					'user_id' => $i,
					'reward_id' => 2,
					'pj_id' => 1,
					'comment' => '素敵なデザイン、斬新なアイデアの商品でいつも広告を見るのが楽しみです。
					ワクワクをありがとうございます。',
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now(),
				],
		]);
	}
}
}
