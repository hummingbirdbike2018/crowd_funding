<?php

use Illuminate\Database\Seeder;

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
				'user_id' => 1,
				'reward_id' => 1,
				'pj_id' => 1,
			]);
		}
}
