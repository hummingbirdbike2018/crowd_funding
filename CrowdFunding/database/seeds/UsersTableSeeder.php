<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('users')->insert([
				[
				'id' => 1,
				'display' => 'suz',
				'email' => 'test1@email.com',
				'password' => bcrypt('test1234'),
				'name' => '鈴木',
				'name_kana' => 'すずき',
				'tel' => '03-1234-1234',
				'post_code' => '111-0000',
				'address' => '東京都',
				'building' => 'xxマンション',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
			'id' => 2,
			'display' => 'tana',
			'email' => 'test2@email.com',
			'password' => bcrypt('test1234'),
			'name' => '田中',
			'name_kana' => 'たなか',
			'tel' => '03-1234-1234',
			'post_code' => '111-0000',
			'address' => '東京都',
			'building' => 'xxマンション',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		],
		[
		'id' => 3,
		'display' => 'taka',
		'email' => 'test3@email.com',
		'password' => bcrypt('test1234'),
		'name' => '高橋',
		'name_kana' => 'たかはし',
		'tel' => '03-1234-1234',
		'post_code' => '111-0000',
		'address' => '東京都',
		'building' => 'xxマンション',
		'created_at' => Carbon::now(),
		'updated_at' => Carbon::now(),
	],
	[
	'id' => 4,
	'display' => 'yama',
	'email' => 'test4@email.com',
	'password' => bcrypt('test1234'),
	'name' => '山田',
	'name_kana' => 'やまだ',
	'tel' => '03-1234-1234',
	'post_code' => '111-0000',
	'address' => '東京都',
	'building' => 'xxマンション',
	'created_at' => Carbon::now(),
	'updated_at' => Carbon::now(),
],
[
'id' => 5,
'display' => 'ota',
'email' => 'test5@email.com',
'password' => bcrypt('test1234'),
'name' => '太田',
'name_kana' => 'おおた',
'tel' => '03-1234-1234',
'post_code' => '111-0000',
'address' => '東京都',
'building' => 'xxマンション',
'created_at' => Carbon::now(),
'updated_at' => Carbon::now(),
],
	]);
	}
}
