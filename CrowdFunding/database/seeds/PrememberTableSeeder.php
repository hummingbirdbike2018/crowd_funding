<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PrememberTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('premembers')->insert([
				 'email' => 'dummy@email.com',
				 //bcryptで暗号化
				 'password' => bcrypt('test1234'),
				 'created_at' => Carbon::now(),
				 'updated_at' => Carbon::now(),
		 ]);
		}
}
