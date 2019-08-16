@extends('layouts.layout')
@section('content')


<div class= "container">
	<div class="border bg-light rounded p-4 shadow p-3 mb-5 w-50 mx-auto">
		<div class="form-group form-content">
			<label class="font-weight-bold">サイト制作のきっかけ</label>
			<textarea class="form-control  mt-2 mb-5" id="overview" rows="3" readonly>プログラミング学習の集大成として、製作してみたいサービスを考えたところ、利用したことのあるサービスを自分で作ってみたくなり制作。
また、転職活動用のポートフォリオも兼ねています。</textarea>
			<label class="font-weight-bold">製作期間</label>
			<textarea class="form-control  mt-2 mb-5" id="overview" rows="3" readonly>およそ3か月</textarea>
			<label class="font-weight-bold">苦労した点</label>
			<textarea class="form-control  mt-2 mb-5" id="overview" rows="3" readonly>ロジックの組み立て</textarea>
			<label class="font-weight-bold">やりがいを感じた点</label>
			<textarea class="form-control  mt-2 mb-5" id="overview" rows="3" readonly>フロント側デザイン、ロジックの組み立て</textarea>
			<label class="font-weight-bold">参考サイト</label>
			<textarea class="form-control  mt-2 mb-5" id="overview" rows="3" readonly>https://greenfunding.jp/　参考というより模写</textarea>
			<label class="font-weight-bold">未実装箇所</label>
			<textarea class="form-control  mt-2 mb-5" id="overview" rows="8" readonly>レスポンシブデザイン、バリデーション、カード決済フォーム、システム側、起案者サービス、etc</textarea>
		</div>
	</div>
</div>
@endsection
