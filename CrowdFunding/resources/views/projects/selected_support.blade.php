@extends('layouts.layout')

@section('content')

<div class="col-md-7">
	<div class="container">
		@foreach($rewards as $reward)
		<form action="{{ $reward->id.'/confirm' }}" method="post" enctype="multipart/form-data">
			<h3 class="py-3" id="pj_title"></h3>
			<div class="shadow-sm p-3 mb-5 bg-white rounded">
				<p class="py-3 mx-auto" id="selected_reward">支援内容</p>
				<div class="reward_container">
					<table class="table selected_reward_table">
						<tr>
							<th scope="row"><img src="/crowd_funding/CrowdFunding/public/storage/{{$reward->rw_image }}"></th>
								<td>
									<p>{{ $reward->rw_title }}</p>
									<p>限定 {{ $reward->rw_quantity }} 個</p>
									<p>¥ {{ number_format($reward->rw_price) }}</p>
									<p>{{ $reward->rw_body }}
									<p>予定配送時期 {{ $reward->rw_season }}
									<p>{{  $supporter }} 人が支援
									<br>残り {{ $reward->rw_quantity - $supporter }} 個
								</td>
						</tr>
					</table>
						<a  class="float-right" href="{{'select'}}">リターンを変更する</a>
					<table class="table payment_table">
						<tr>
							<th scope="row">支援額</th>
							<td>¥　{{ number_format($reward->rw_price) }}</td>
		@endforeach
						</tr>
						<tr>
							<th scope="row">コメント</th>
							<td class="comments">
								<textarea name="comment" placeholder="例：応援しています。"></textarea><br>
								<small class="text-danger">※記載したコメントと登録名は、支援したプロジェクトページの「応援コメント」欄に掲載されますので、個人情報に関する投稿はお控え下さい。</samll>
							</td>
						</tr>
						<tr>
							<th scope="row">決済方法</th>
								<td>
									クレジットカード決済
									<img src="/crowd_funding/CrowdFunding/public/storage/visa.gif">
									<img src="/crowd_funding/CrowdFunding/public/storage/jcb.gif">
									<img src="/crowd_funding/CrowdFunding/public/storage/master.gif">
									<img src="/crowd_funding/CrowdFunding/public/storage/ae.gif"><p>
									<small>募集期間内に支援が目標金額に達した場合のみ、クレジットカード決済が行われます</small>
								</td>
						</tr>
					</table>
					<table class="table shipping_table">
					@foreach($users as $user)
						<tr>
							<th scope="row">氏名</th>
								<td><input type="text" name="name" class="form-control rounded-0 my-2" value="{{ $user->name }}" placeholder="例：山田　太郎"></td>
						</tr>
						<tr>
							<th scope="row">フリガナ</th>
								<td><input type="text" name="name_kana" class="form-control rounded-0 my-2" value="{{ $user->name_kana }}" placeholder="例：ヤマダ　タロウ"></td>
						</tr>
						<tr>
							<th scope="row">郵便番号</th>
								<td><input type="text" name="post_code" class="form-control rounded-0 my-2" value="{{ $user->post_code }}" placeholder="例：150-0034"></td>
						</tr>
						<tr>
							<th scope="row">都道府県市区町村</th>
								<td><input type="text" name="address" class="form-control rounded-0 my-2" value="{{ $user->address }}" placeholder="例：東京都渋谷区代官山町"></td>
						</tr>
						<tr>
							<th scope="row">番地・建物名</th>
								<td><input type="text" name="building" class="form-control rounded-0 my-2" value="{{ $user->building }}" placeholder="例：1-1"></td>
						</tr>
						<tr>
							<th scope="row">電話番号</th>
								<td><input type="text" name="tel" class="form-control rounded-0 my-2" value="{{ $user->tel }}" placeholder="例：03-123-4567"></td>
						</tr>
						<tr>
							<th scope="row">メールアドレス</th>
							<td><input type="text" name="email" class="form-control rounded-0 my-2" value="{{ $user->email }}" placeholder="例：yamada-t@email.com"></td>
						</tr>
					@endforeach
					</table>
					<label><input type="checkbox" name="address_check">この住所情報をマイページに登録する</label><br>
					<label><input type="checkbox"><a href="{{ '/crowd_funding/CrowdFunding/public/terms' }}">利用規約</a>に同意する</label><p>
						<p>※入力された情報は、本プロジェクト起案者に提供されます</p>
						@csrf
					<button type="submit" name="action" class="btn btn-primary rounded-0" value="confirm">確認画面へ進む</button>
					<div class="suppport_notice">
						<small>【要確認】<br>
							・残り{{ $period }} 日で支援総額が¥{{ number_format($project->target_amount) }}に達しない場合は、プロジェクト不成立となりカードの決済は行われません。また、リターンも発生しません。<br>
							・支援を行うには、有効期限が残り100日以上の各種クレジットカードが必要です。<br>
						</small>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@include('footer')
