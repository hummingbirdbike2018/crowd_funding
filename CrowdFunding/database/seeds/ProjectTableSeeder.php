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
				'planner_id' => 1,
				'product_detail_1' => 'プロジェクト説明その１',
				'product_detail_2' => 'プロジェクト説明その２',
				'product_detail_3' => 'プロジェクト説明その３',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 100000,
				'period' => 10,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]);
		}
}
