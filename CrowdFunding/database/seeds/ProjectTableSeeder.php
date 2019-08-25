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
世界初、完全ワイヤレス骨伝導イヤホン誕生。
earsopen®︎ “PEACE”【音楽モデル/聴覚補助モデル】',
				'planner_id' => 1,
				'product_detail_1' => 'クリップ型イヤホンearsopen®︎が1億円超えの支援を集めてから、2年。ついに世界初の完全ワイヤレス骨伝導イヤホンを生み出すことができました。 この完全ワイヤレスイヤホンは、エジソンによる蓄音機の発明以来変わらない人間と音との関係をネクストステージに押し上げる、いわば新時代のイヤホンです。',
				'product_detail_2' => '最高品質『骨伝導』＝革新的ヒアラブルテクノロジー
人間の脳には、まだ解明できていない様々な能力があると言われています。聴覚についても同様です。earsopen®︎を開発し体験していく中で、テクノロジーの進化が人間の聴力を守り覚醒していく未来を確信するようになりました。 我々自身もそうですし、earsopen®︎を愛用している多くのお客様からも「音の聴こえ方が鮮明になっていくのを感じる」「骨伝導で聴く音がより大きく感じられるようになった」というお話を伺いました。 母親の胎内にいる時、人は骨で音を聴いていると言われています。最高品質のデバイスによる骨伝導のヒアリング体験は、人間の使われていなかった能力、すなわち、第2の聴覚を呼び起こします。まさにこの世界初の完全ワイヤレス骨伝導イヤホンには、革新的なヒアラブルテクノロジーが詰まっているのです。',
				'product_detail_3' => '特許技術の詰め込まれたイヤカフ形状による最高の骨伝導サウンドとフィット感
この独特な形状はデザイン性のみならず、機能面も突き詰められた形状です。骨伝導部分が、耳のスイートスポットに完璧にフィットすることで、高品質な骨伝導デバイスの振動を余すことなく効率的に伝えることができます。また、しっかりとしたホールド感により、日常生活のみならず、運動時にも安心してつけていただくことができます。',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 100000,
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
				'target_amount' => 100000,
				'period' => 30,
				'status' => 1,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 3,
				'pj_title' => 'わずか1.3ｇ 耳栓より小さい！
世界最小ワイヤレスイヤホン
『GRAIN』',
				'planner_id' => 3,
				'product_detail_1' => '最も小さなワイヤレスイヤホンを目指したGRAIN
機能過多な時代に、敢えて音楽・動画視聴だけに機能を絞りこみ、
だれでもわかるシンプルな完全ワイヤレスイヤホン
男性・女性問わずあらゆる耳の大きさや形にフィットするイヤホン
を目指しこだわって開発したMADE IN JAPANの完全ワイヤレスイヤホンです。',
				'product_detail_2' => 'GRAINは、直径10mm以下、長さも20mm以下と非常に小さく、男女問わず耳の中にすっぽりと収まりイヤーキャップでしっかりと固定されるので簡単に外れてしまう心配がありません。また、小さいが故に耳の各部位を圧迫しづらく、痛みがでにくいのが特徴です。',
				'product_detail_3' => '余計なものは一切取り入れない。

究極の小型化を実現するためには、必要な部品を最も効率よく配置し、且つ全体の性能を下げないように工夫が必要でした。GRAINは、デザインと設計の段階で検討を重ね、最も無駄のない最小形状にまとめ上げています。そしてGRAINのテーマは、機能を絞って、シンプルでわかりやすく、だれの耳にもフィットするイヤホン。このシンプルでわかりやすくというテーマから、イヤホンの意匠の考え方も、必要ない要素を徹底的に省きデザインをしました。',
				'product_img_1' => 'test1.png',
				'product_img_2' => 'test2.gif',
				'product_img_3' => 'test3.gif',
				'target_amount' => 100000,
				'period' => 20,
				'status' => 1,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 4,
				'pj_title' => 'いつでもどこでもあなただけのオーディオルームを。
スピーカー再生空間を創り出すイヤホン
日本発オーディオブランド「Artio」の新プロジェクト',
				'planner_id' => 4,
				'product_detail_1' => 'Artio CRシリーズは、携帯性と細かな音の再生に優れたカナル型イヤホンでありながら、スピーカー再生のような音楽空間を感じる事ができる、まさに「いいとこどり」のイヤホンです。
場所を選ぶことなく、いつでもあなただけのオーディオルームへ入り込むことができます。
既存のイヤホンやヘッドホンで満足していない方や、広がりのある音を外出先でも楽しみたい方、イヤホンで音楽のリアリティを味わいたい方へ、新しい音楽体験を提供します。',
				'product_detail_2' => 'Artioは"Sound for new value" をコンセプトに、今までにない新しい「音のカタチ」を皆様に提案する日本発のオーディオブランドです。
そのコンセプトの下、2018年2月よりブランドをローンチ、1stモデル"CU1"に続いてフラッグシップモデル"RK01"を発売し、多くのお客様よりご好評をいただいてまいりました。
公式HP　https://artio.co.jp/',
				'product_detail_3' => '何気なく使っているカナル型イヤホン。こんなことを感じた事はありませんか？
・スピーカーで音を聴いた時と、イヤホンで音を聴いた時で音楽の感じ方が違う
・ライブで気に入った曲のはずなのに、イヤホンでは違う曲のように感じてしまう
・音が頭の中で鳴っているようで閉塞感がある

このようにスピーカーやライブなどで耳が塞がれていない状態で聴く場合とイヤホンで聴く場合では、どうしても音の感じ方が異なってしまい、同じ音源なのに同じ感覚で聴くことができません。これは、イヤホン特有の頭の中で音が聞こえる現象”頭内定位”が原因です。この頭内定位があることで、どんなに臨場感や躍動感がある音源をイヤホンで聴いても、スピーカーやライブで聴くようには聞こえません。',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 50000,
				'period' => 30,
				'status' => 1,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 5,
				'pj_title' => '10万円以上の時計が3万円台で購入可能！
ロレックス等を修理していた技師がはじめた「機械式カスタマイズ腕時計BASECAMP」　
【CrowdFunding限定で先行販売】',
				'planner_id' => 1,
				'product_detail_1' => '時代によって時計に求められるものは様々です。時には視認性が高い必要があったり、耐久性を求められることも多くあります。また、ファッション性を求めることでもその様相は変化しています。しかし、ツールウォッチとして一番大切なことは、丈夫かつカジュアルに身につけられること。どんな環境下でもあなたの腕で時を刻むことを私たちこの「ベースキャンプ」に求めました。',
				'product_detail_2' => '機械式時計を３万円台でカスタマイズできることこそ、それがBASECAMPの大きな特徴の一つです。',
				'product_detail_3' => 'コストは最大限まで削減しましたが、素材にはこだわって制作しています。

例えば、ケースは「316Lステンレス」という医療用のメスに使用される上位ランク、風防は防弾ガラスと同等の強度を誇る「ポリカーボネート」、約40時間駆動するSEIKOの機械式ムーブメントなどで、そこに「カスタマイズできる」という要素を追加すると、15万円以上の価値は十分にあると確信しています。

長年、工場と直接とやり取りをしてきた時計技師が始めたブランドだからこそ、この価格での提供が実現しました。',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.gif',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 100000,
				'period' => 50,
				'status' => 1,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 6,
				'pj_title' => 'プロも認めるハンドメイドオーディオメーカー MHaudioが作る
ハイブリッド真空管アンプ「MHaudio UA-1」
本物の造りと真空管の音！あなた好みにカスタマイズも！',
				'planner_id' => 2,
				'product_detail_1' => 'MHaudio（エムエイチオーディオ）は、小型でも本当にイイ音で音楽を楽しめるスピーカーやアンプをハンドメイドするオーディオメーカーです。
10年前に自分用に製作したスピーカーとアンプが口コミで広がり、今では、個人のユーザーから、音楽マニア、プロの演奏家や指揮者、また、カフェ、レストラン、FM放送局、、など、業務用にも多くのユーザーを持つ知る人ぞ知る日本のオーディオメーカーです。
そんなMHaudioが【真空管ハイブリッドアンプ MHaudio UA-1】を造りました。
（以降本文では、「真空管アンプ　MHaudio UA-1」記載します）',
				'product_detail_2' => '真空管アンプの紹介でよく見受けられるのが「丸みのある温かい音」という表現、ノスタルジックなイメージにぴったりですが、でも本当に良くできた真空管アンプは「艶がありつつも華やかで爽やかな音」がします。
「丸く温かい」という重鈍なイメージとは正反対の「スピード感のある、透明感のある音」が本当の真空管アンプの音です。',
				'product_detail_3' => '【真空管アンプ MHaudio UA-1】は、純粋な真空管アンプではありません。
真空管の音の良さを十分に活かし、真空管の弱点であるドライブ力の不足を、最新の半導体アンプに任せた「いいとこどり」のアンプです。だから、本来の真空管の持つ「スピード感のある、華やかで爽やかな音」を楽しめます。
真空管アンプの音の良さは、真空管による独特の歪み（ひずみ）がつくりだしています。歪み（ひずみ）とは「入れた信号と、出てくる信号の、差」つまり「正確ではない、余分な音」です。
現代の半導体アンプは、非常に特性が良く「低歪み」、つまり「入れた信号と、出てくる信号が、同じ」です。
でも不思議な事に、正確な音よりも、歪（ひず）んだ音のほうが、人間は心地よく感じたり、いい音と感じたりするのです。',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.jpg',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 50000,
				'period' => 40,
				'status' => 1,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 7,
				'pj_title' => '電気自動車で採用の高速・高出力パワーセルを搭載
ノートパソコンも充電できるモバイルバッテリー PRVK[プロヴォーク]
あなたの人生に、自由と冒険を。',
				'planner_id' => 3,
				'product_detail_1' => 'プロヴォーク[PRVK]は、電気自動車で採用の高速・高出力のパワーセルを搭載した、世界で最もパワフルなUSB Type-C対応のモバイルバッテリーです。手のひらに乗るコンパクトな筐体に、Mac / Windowsノートパソコンを充電*できる100W/27000mAhのスペックを実現しました。航空機内への持ち込みも可能です。あなたの人生に、自由と冒険を。プロヴォーク[PRVK]は、あなたの可能性をデバイスとともに最大限に引き出します。',
				'product_detail_2' => 'プロヴォーク[PRVK]は、電気自動車向けのハイパーパワーセルを搭載することにより、これまでの一般的なモバイルバッテリーとは桁違いの高出力を実現しました。プロヴォーク[PRVK]は、1ポートあたり最大100Wの高出力でデバイスへの給電が可能です。一般的なモバイルバッテリーの出力（5W）との出力差は、単純換算でおよそ20倍。これまでの一般的なモバイルバッテリーは、消費電力の小さい限られたデバイスにしか給電できませんでした。プロヴォーク[PRVK]なら、対応のWindowsPCやMacbook Proへフル充電が可能です。',
				'product_detail_3' => 'PRVKはMacbook Pro 13" (2018) を最高速度で最大1.5回も充電できる大容量。また、Type-CおよびType-A 2端子に接続してお持ちのiPhoneやiPad、ゲーム端末、アクションカメラなど日常で使用している端末を何度も充電するのに利用ができます。',
				'product_img_1' => 'test1.png',
				'product_img_2' => 'test2.png',
				'product_img_3' => 'test3.png',
				'target_amount' => 50000,
				'period' => 30,
				'status' => 1,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'id' => 8,
				'pj_title' => '約45日間充電不要！？単一電池分の超軽量なのにパワフル！
携帯性バツグンな電動シェーバー「SO WHITE MINI SHAVER」
出張・旅行のお供に！',
				'planner_id' => 4,
				'product_detail_1' => '荷物がかさばりがちな、旅行や出張先。ホテルの髭剃りでは心許ないし、普段のシェーバーを持ち歩くのは大変・・・

そこで、今回はスタイリッシュ・軽量で携帯性バツグンの「SO WHITE MINI SHAVER」をご紹介します！

コンパクトサイズなのに、高速モーターに加え、三枚刃を採用しており長期間の連続使用も可能です。

さらに防水と安全性も兼ね備えているので、あなたの旅のパートナーとして活躍間違いなしです！',
				'product_detail_2' => 'ヘッドとバッテリー、パワフルモーター内蔵の設計バランス良く組み合わせることで軽量化に成功しました。単一電池よりも軽いわずか116gという軽さを実現しました！',
				'product_detail_3' => '長さ94mm、重さ116gとコンパクト & 超軽量で片手に収まってしまうサイズ感、持ち運びが便利です。

名刺とほぼ同じサイズ、小型シェーバーの中でも最軽量ですが、カバンの中では邪魔にならずひっそりと、使用時は存在感を大いに発揮してくれます。簡単に収納できてスペースを取らないので収納面も完璧です。',
				'product_img_1' => 'test1.jpg',
				'product_img_2' => 'test2.gif',
				'product_img_3' => 'test3.jpg',
				'target_amount' => 20000,
				'period' => 50,
				'status' => 1,
				'dis_reason' => 0,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		]);
	}
}
