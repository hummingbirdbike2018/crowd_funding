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
			[
				'id' => 1,
				'pj_title' => 'あなたの聴覚を守り、覚醒させる。
世界初、完全ワイヤレス骨伝導イヤホン誕生。earsopen®︎ “PEACE”【音楽モデル/聴覚補助モデル】',
				'planner_id' => 1,
				'product_detail_1' => 'クリップ型イヤホンearsopen®︎が1億円超えの支援を集めてから、2年。ついに世界初の完全ワイヤレス骨伝導イヤホンを生み出すことができました。 この完全ワイヤレスイヤホンは、エジソンによる蓄音機の発明以来変わらない人間と音との関係をネクストステージに押し上げる、いわば新時代のイヤホンです。',
				'product_detail_2' => '最高品質『骨伝導』＝革新的ヒアラブルテクノロジー
人間の脳には、まだ解明できていない様々な能力があると言われています。聴覚についても同様です。earsopen®︎を開発し体験していく中で、テクノロジーの進化が人間の聴力を守り覚醒していく未来を確信するようになりました。 我々自身もそうですし、earsopen®︎を愛用している多くのお客様からも「音の聴こえ方が鮮明になっていくのを感じる」「骨伝導で聴く音がより大きく感じられるようになった」というお話を伺いました。 母親の胎内にいる時、人は骨で音を聴いていると言われています。最高品質のデバイスによる骨伝導のヒアリング体験は、人間の使われていなかった能力、すなわち、第2の聴覚を呼び起こします。まさにこの世界初の完全ワイヤレス骨伝導イヤホンには、革新的なヒアラブルテクノロジーが詰まっているのです。',
				'product_detail_3' => '特許技術の詰め込まれたイヤカフ形状による最高の骨伝導サウンドとフィット感
この独特な形状はデザイン性のみならず、機能面も突き詰められた形状です。骨伝導部分が、耳のスイートスポットに完璧にフィットすることで、高品質な骨伝導デバイスの振動を余すことなく効率的に伝えることができます。また、しっかりとしたホールド感により、日常生活のみならず、運動時にも安心してつけていただくことができます。',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 1000000,
				'period' => 80,
				'status' => 1,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 2,
				'pj_title' => 'シチズン製・光発電スマートウオッチ
“好きな機能を入れ替えられる”
『Eco-Drive Riiiver』',
				'planner_id' => 2,
				'product_detail_1' => '「機能」を選ぶ・つくる・シェアする
『Riiiver（リィイバー）』とは、さまざまなデバイスを基点に、ヒト・モノ・コトを繋げるIoTプラットフォームです。『Eco-Drive Riiiver（エコ・ドライブ リィイバー）』は、そのIoTプラットフォームであるRiiiverに対応した次世代のスマートウォッチです。Riiiverと連携することで、自分の好きな「機能」をEco-Drive Riiiverに設定することができます。また気分やシーンに合わせて「機能」を入れ替えたり、またスマートフォン用アプリ『Riiiver』を利用することで、誰でも簡単に「機能」自体をつくることもでき、それを共有することもできます。',
				'product_detail_2' => '持ち運べるRiiiver起動ボタン
Eco-Drive Riiiverは、物理ボタンを持っているため、暗闇でも、何かほかの作業をしている時でも、ノールック操作を可能にします。また常に身に着けておけば、デバイスを取り出す必要がなく、Riiiver連携の起動アクセシビリティに優れています。',
				'product_detail_3' => 'GreenFunding限定販売
2019年秋ごろ一般発売予定の『Eco-Drive Riiiver』を、GreenFunding限定特別価格にて先行販売いたします！',
				'product_img_1' => 'test1.png',
				'product_img_2' => 'test2.gif',
				'product_img_3' => 'test3.png',
				'target_amount' => 1500000,
				'period' => 30,
				'status' => 1,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 3,
				'pj_title' => 'プロジェクト3',
				'planner_id' => 3,
				'product_detail_1' => 'プロジェクト説明その１',
				'product_detail_2' => 'プロジェクト説明その２',
				'product_detail_3' => 'プロジェクト説明その３',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 100000,
				'period' => 10,
				'status' => 0,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 4,
				'pj_title' => 'プロジェクト4',
				'planner_id' => 4,
				'product_detail_1' => 'プロジェクト説明その１',
				'product_detail_2' => 'プロジェクト説明その２',
				'product_detail_3' => 'プロジェクト説明その３',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 100000,
				'period' => 10,
				'status' => 0,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 5,
				'pj_title' => 'プロジェクト5',
				'planner_id' => 1,
				'product_detail_1' => 'プロジェクト説明その１',
				'product_detail_2' => 'プロジェクト説明その２',
				'product_detail_3' => 'プロジェクト説明その３',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 100000,
				'period' => 10,
				'status' => 0,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 6,
				'pj_title' => 'プロジェクト6',
				'planner_id' => 2,
				'product_detail_1' => 'プロジェクト説明その１',
				'product_detail_2' => 'プロジェクト説明その２',
				'product_detail_3' => 'プロジェクト説明その３',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 100000,
				'period' => 10,
				'status' => 0,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 7,
				'pj_title' => 'プロジェクト7',
				'planner_id' => 3,
				'product_detail_1' => 'プロジェクト説明その１',
				'product_detail_2' => 'プロジェクト説明その２',
				'product_detail_3' => 'プロジェクト説明その３',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 100000,
				'period' => 10,
				'status' => 0,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 8,
				'pj_title' => 'プロジェクト8',
				'planner_id' => 4,
				'product_detail_1' => 'プロジェクト説明その１',
				'product_detail_2' => 'プロジェクト説明その２',
				'product_detail_3' => 'プロジェクト説明その３',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 100000,
				'period' => 10,
				'status' => 0,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		]);
	}
}
