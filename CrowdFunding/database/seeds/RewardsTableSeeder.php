<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RewardsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('rewards')->insert([
			[
				'id' => 1,
				'pj_id' => 1,
				'rw_title' => '【音楽用無線モデル】Early Bird (41%OFF)',
				'rw_body' => '無線モデルearsopen PEACE 左右1セット
(製品カラーはブラック・ホワイトからお選びいただけます。)',
				'rw_image' => 'reward1.png',
				'rw_quantity' => '1800',
				'rw_price' => '16800',
				'rw_season' => '2019年12月上旬',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 2,
				'pj_id' => 1,
				'rw_title' => '【音楽用無線モデル】GREEN限定(30%OFF)',
				'rw_body' => '無線モデルearsopen PEACE 左右1セット
(製品カラーはブラック・ホワイトからお選びいただけます。)',
				'rw_image' => 'reward2.png',
				'rw_quantity' => '1000',
				'rw_price' => '19800',
				'rw_season' => '2019年12月上旬',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 3,
				'pj_id' => 1,
				'rw_title' => '【音楽用無線モデル】Early Bird (41%OFF)',
				'rw_body' => '無線モデルearsopen PEACE 左右1セット
(製品カラーはブラック・ホワイトからお選びいただけます。)
※ご購入の際に在籍している学校名の入力が必要です。',
				'rw_image' => 'reward3.png',
				'rw_quantity' => '1000',
				'rw_price' => '15800',
				'rw_season' => '2019年12月上旬',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 4,
				'pj_id' => 2,
				'rw_title' => 'Standard（最終追加分）【20%OFF/11月発送】',
				'rw_body' => 'BZ7005-74E',
				'rw_image' => 'reward1.png',
				'rw_quantity' => '1500',
				'rw_price' => '39000',
				'rw_season' => ' ※11月以降のお届けを予定しております。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 5,
				'pj_id' => 2,
				'rw_title' => 'Standard（最終追加分）【20%OFF/11月発送】',
				'rw_body' => 'BZ7005-74X',
				'rw_image' => 'reward2.png',
				'rw_quantity' => '1500',
				'rw_price' => '39000',
				'rw_season' => ' ※11月以降のお届けを予定しております。',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 6,
				'pj_id' => 2,
				'rw_title' => 'Standard（最終追加分）【20%OFF/11月発送】',
				'rw_body' => 'BZ7007-61E',
				'rw_image' => 'reward3.png',
				'rw_quantity' => '1500',
				'rw_season' => ' ※11月以降のお届けを予定しております。',
				'rw_price' => '39000',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		]);
	}
}
