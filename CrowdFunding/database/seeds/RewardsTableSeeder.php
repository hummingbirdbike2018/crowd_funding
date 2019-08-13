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
				'rw_title' => '【音楽用無線モデル】
				Early Bird (41%OFF)',
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
				'rw_title' => '【音楽用無線モデル】
				GREEN限定(30%OFF)',
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
				'rw_title' => '【音楽用無線モデル】
				Early Bird (41%OFF)',
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
				'rw_title' => 'Standard（最終追加分）
				【20%OFF/11月発送】',
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
				'rw_title' => 'Standard（最終追加分）
				【20%OFF/11月発送】',
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
				'rw_title' => 'Standard（最終追加分）
				【20%OFF/11月発送】',
				'rw_body' => 'BZ7007-61E',
				'rw_image' => 'reward3.png',
				'rw_quantity' => '1500',
				'rw_season' => ' ※11月以降のお届けを予定しております。',
				'rw_price' => '39000',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 7,
				'pj_id' => 3,
				'rw_title' => 'Value Plus 「GRAIN」(20%OFF)',
				'rw_body' => 'GRAIN 1セット',
				'rw_image' => 'reward1.png',
				'rw_quantity' => '800',
				'rw_season' => '11月下旬から12月中',
				'rw_price' => '21800',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 8,
				'pj_id' => 3,
				'rw_title' => 'STANDARD「GRAIN」',
				'rw_body' => 'GRAIN 1セット',
				'rw_image' => 'reward1.png',
				'rw_quantity' => '1000',
				'rw_season' => '11月下旬から12月中',
				'rw_price' => '27200',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 9,
				'pj_id' => 3,
				'rw_title' => 'Early Bird 「GRAIN」(24%OFF)',
				'rw_body' => 'GRAIN 1セット',
				'rw_image' => 'reward1.png',
				'rw_quantity' => '500',
				'rw_season' => '11月下旬から12月中',
				'rw_price' => '20800',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 10,
				'pj_id' => 4,
				'rw_title' => 'Early Bird 「CR-M1」
				限定200個 23%OFF',
				'rw_body' => 'Artio CR-M1',
				'rw_image' => 'reward1.jpg',
				'rw_quantity' => '200',
				'rw_season' => '10月末頃～11月末頃',
				'rw_price' => '11500',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 11,
				'pj_id' => 4,
				'rw_title' => 'Value Plus「CR-M1」
				限定300個 17%OFF',
				'rw_body' => 'Artio CR-M1',
				'rw_image' => 'reward2.jpg',
				'rw_quantity' => '300',
				'rw_season' => '10月末頃～11月末頃',
				'rw_price' => '12500',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 12,
				'pj_id' => 4,
				'rw_title' => 'Value Plus「CR-V1」
				限定300個 20%OFF',
				'rw_body' => 'Artio CR-V1',
				'rw_image' => 'reward3.jpg',
				'rw_quantity' => '300',
				'rw_season' => '10月末頃～11月末頃',
				'rw_price' => '31790',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 13,
				'pj_id' => 5,
				'rw_title' => '【限定各200個】
				BASECAMP 既製モデル 13%OFF',
				'rw_body' => 'BASECAMP 既製モデル 1本
※カスタマイズできないモデルとなります。いずれもムーブメントのカレンダーは黒背景でのご用意。',
				'rw_image' => 'reward1.jpg',
				'rw_quantity' => '200',
				'rw_season' => '10月中旬より順次発送予定',
				'rw_price' => '30790',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 14,
				'pj_id' => 5,
				'rw_title' => 'BASECAMP 既製モデル 6%OFF',
				'rw_body' => 'BASECAMP 既製モデル 1本
※カスタマイズできないモデルとなります。いずれもムーブメントのカレンダーは黒背景でのご用意。',
				'rw_image' => 'reward2.jpg',
				'rw_quantity' => '300',
				'rw_season' => '10月中旬より順次発送予定',
				'rw_price' => '33200',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 15,
				'pj_id' => 5,
				'rw_title' => '【限定200枚】
				BASECAMP カスタマイズチケット（10%OFF）',
				'rw_body' => 'BASECAMPのカスタマイズチケットをお送りいたします。
お客様でカスタマイズモデルを完成させていただきます。いずれもムーブメントのカレンダーは黒背景でのご用意。',
				'rw_image' => 'reward3.jpg',
				'rw_quantity' => '200',
				'rw_season' => '10月中旬より順次発送予定',
				'rw_price' => '31860',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 16,
				'pj_id' => 6,
				'rw_title' => 'GREEN限定価格
				「MHaudio UA-1」(10%OFF)',
				'rw_body' => '・「MHaudio UA-1」1台
※価格は税・送料込みの総額となります。',
				'rw_image' => 'reward1.jpg',
				'rw_quantity' => '50',
				'rw_season' => '目標達成の2ヶ月後から順次',
				'rw_price' => '66800',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 17,
				'pj_id' => 6,
				'rw_title' => '「MHaudio UA-1」
				聴き比べ替球セット(14%OFF)',
				'rw_body' => '「MHaudio UA-1」
交換用真空管(プランにより種類・個数が異なります)
※プランの詳細については、本文をご確認ください。
※価格は税・送料込みの総額となります。',
				'rw_image' => 'reward2.jpg',
				'rw_quantity' => '40',
				'rw_season' => '目標達成の2ヶ月後から順次',
				'rw_price' => '66000',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 18,
				'pj_id' => 6,
				'rw_title' => 'カスタムモデル
				「MHaudio UA-1」(14%OFF)',
				'rw_body' => '「MHaudio UA-1」
カスタムモデル各種
※プランの詳細については、本文をご確認ください。
※価格は税・送料込みの総額となります。',
				'rw_image' => 'reward3.jpg',
				'rw_quantity' => '23',
				'rw_season' => '目標達成の2ヶ月後から順次',
				'rw_price' => '69000',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 19,
				'pj_id' => 7,
				'rw_title' => '特割！LIMITED VALUE PLUS
				 限定70個【25% OFF】',
				'rw_body' => '本体価格：
18,900円→14,100円（25%OFF）

内容：
・PRVK（本体）
・マニュアル
・Type-C USB ケーブル ',
				'rw_image' => 'reward1.png',
				'rw_quantity' => '70',
				'rw_season' => '2019年9月',
				'rw_price' => '14100',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 20,
				'pj_id' => 7,
				'rw_title' => 'クラウドファンディング特別価格【16%OFF】',
				'rw_body' => '本体価格：
18,900円→15,800円（16%OFF）

内容：
・PRVK（本体）
・マニュアル
・Type-C USB ケーブル
・MicroUSB ケーブル',
				'rw_image' => 'reward1.png',
				'rw_quantity' => '100',
				'rw_season' => '2019年9月',
				'rw_price' => '15800',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 21,
				'pj_id' => 7,
				'rw_title' => '【2セット】EARLY BIRD・早割 限定25【36％OFF】',
				'rw_body' => '本体価格：
37,800円→24,100円（36%OFF）

内容：
・PRVK（本体） ×2
・マニュアル 　 ×2
・Type-C USB ケーブル　×2
・MicroUSB ケーブル　　×2',
				'rw_image' => 'reward1.png',
				'rw_quantity' => '25',
				'rw_season' => '2019年9月',
				'rw_price' => '24100',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 22,
				'pj_id' => 8,
				'rw_title' => '「SO WHITE MINI SHAVER」1セット',
				'rw_body' => '・「SO WHITE MINI SHAVER」本体 x1
・取り扱い説明書 x1
・Type-C充電ケーブル x1
・保護カバー x1

※2019年11月にお届けする予定ですが、生産、配送状況により遅れる可能性もございます。
※送料込・税込の価格となります。
※商品の仕様、デザインに関しましては一部変更になる可能性もございます。ご了承ください。',
				'rw_image' => 'reward1.jpg',
				'rw_quantity' => '100',
				'rw_season' => '2019年11月',
				'rw_price' => '3280',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 23,
				'pj_id' => 8,
				'rw_title' => '「SO WHITE MINI SHAVER」2セット',
				'rw_body' => '・「SO WHITE MINI SHAVER」本体 x1
・取り扱い説明書 x1
・Type-C充電ケーブル x1
・保護カバー x1

※2019年11月にお届けする予定ですが、生産、配送状況により遅れる可能性もございます。
※送料込・税込の価格となります。
※商品の仕様、デザインに関しましては一部変更になる可能性もございます。ご了承ください。',
				'rw_image' => 'reward2.jpg',
				'rw_quantity' => '80',
				'rw_season' => '2019年11月',
				'rw_price' => '5960',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 24,
				'pj_id' => 8,
				'rw_title' => '「SO WHITE MINI SHAVER」5セット',
				'rw_body' => '・「SO WHITE MINI SHAVER」本体 x1
・取り扱い説明書 x1
・Type-C充電ケーブル x1
・保護カバー x1

※2019年11月にお届けする予定ですが、生産、配送状況により遅れる可能性もございます。
※送料込・税込の価格となります。
※商品の仕様、デザインに関しましては一部変更になる可能性もございます。ご了承ください。',
				'rw_image' => 'reward3.jpg',
				'rw_quantity' => '50',
				'rw_season' => '2019年11月',
				'rw_price' => '12900',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
		]);
	}
}
