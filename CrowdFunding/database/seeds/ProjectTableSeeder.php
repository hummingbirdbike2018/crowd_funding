<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('projects')->insert([
				'pj_id' => 1,
				'pj_title' => 'プロジェクト１',
				'plannner_id' => 1,
				'product_detail_1' => 'プロジェクト説明その１',
				'product_detail_2' => 'プロジェクト説明その２',
				'product_detail_3' => 'プロジェクト説明その３',
				'target_amount' => 100000,
				'reward_id' => 1,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]);
		}
}
