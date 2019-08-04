<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(UsersTableSeeder::class);
		$this->call(CardTableSeeder::class);
		$this->call(PlannersTableSeeder::class);
		$this->call(PrememberTableSeeder::class);
		$this->call(ProjectTableSeeder::class);
		$this->call(RewardsTableSeeder::class);
		$this->call(SupportTableSeeder::class);
	}
}
