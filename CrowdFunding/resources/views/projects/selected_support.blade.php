@extends('layouts.layout')

@section('content')

<div class="col-md-7">
	<div class="container">
	@foreach($rewards as $reward)
		<form action="{{ $reward->id.'/confirm' }}" method="POST" enctype="multipart/form-data">
			<h3 class="py-3" id="pj_title"></h3>
			<div class="shadow-sm p-3 mb-5 bg-white rounded">
				<p class="py-3 " id="selected_reward">支援内容</p>
				<div class="reward_container">
					<table class="table selected_reward_table">
						<tr>
							<th scope="row"><img src="../../../storage/{{$reward->rw_image }}"></th>
							<td>
								<p>{{ $reward->rw_title }}</p>
									<input type="hidden" name="rw_title" class="" value="{{ $reward->rw_title }}">
								<p>限定 {{ $reward->rw_quantity }} 個</p>
									<input type="hidden" name="rw_quantity" class="" value="{{ $reward->rw_quantity }}">
								<p>¥ {{ number_format($reward->rw_price) }}</p>
									<input type="hidden" name="rw_price" class="" value="¥ {{ number_format($reward->rw_price) }}">
								<p>{{ $reward->rw_body }}
									<input type="hidden" name="rw_body" class="" value="{{ $reward->rw_body }}">
								<p>予定配送時期 {{ $reward->rw_season }}
									<input type="hidden" name="rw_season" class="" value="{{ $reward->rw_season }}">
								<p>{{  $supporter }} 人が支援
									<input type="hidden" name="supporter" class="" value="{{ $reward->supporter }}">
								<br>残り {{ $reward->rw_quantity - $supporter }} 個
									<input type="hidden" name="stock" class="" value="{{ $reward->rw_quantity - $supporter }}">
							</td>
						</tr>
					</table>
					<a  class="float-right" href="{{'select'}}">リターンを変更する</a>
					<table class="table selected_reward_misc">
						<thead class="thead-light">
							<tr>
								<th scope="row">支援額</th>
								<td>¥　{{ number_format($reward->rw_price) }}</td>
	@endforeach
							</tr>
							<tr>
								<th scope="row">コメント</th>
								<td class="comments w-75">
									<textarea name="comment" value="{{ old('comment') }}" placeholder="例：応援しています。"  cols="50" rows="3"></textarea><br>
									<small class="text-danger">※記載したコメントと登録名は、支援したプロジェクトページの「応援コメント」欄に掲載されますので、個人情報に関する投稿はお控え下さい。</samll>
								</td>
							</tr>
					</table>
					<p class="mt-5" id="selected_reward">配送先情報</p>
					<table class="table shipping_table">
					@foreach($users as $user)
						<thead class="thead-light">
						<tr>
							<th scope="row">氏名</th>
								<td class="w-75">
									<input type="text" name="name" class="form-control  my-2" value="{{ $user->name }}" placeholder="例：山田　太郎">
								</td>
						</tr>
						<tr>
							<th scope="row">フリガナ</th>
								<td class="w-75">
									<input type="text" name="name_kana" class="form-control  my-2" value="{{ $user->name_kana }}" placeholder="例：ヤマダ　タロウ">
								</td>
						</tr>
						<tr>
							<th scope="row">郵便番号</th>
								<td class="w-75">
									<input type="text" name="post_code" class="form-control  my-2" value="{{ $user->post_code }}" placeholder="例：150-0034">
								</td>
						</tr>
						<tr>
							<th scope="row">都道府県市区町村</th>
								<td class="w-75">
									<input type="text" name="address" class="form-control  my-2" value="{{ $user->address }}" placeholder="例：東京都渋谷区代官山町">
								</td>
						</tr>
						<tr>
							<th scope="row">番地・建物名</th>
								<td class="w-75">
									<input type="text" name="building" class="form-control  my-2" value="{{ $user->building }}" placeholder="例：1-1">
								</td>
						</tr>
						<tr>
							<th scope="row">電話番号</th>
								<td class="w-75">
									<input type="text" name="tel" class="form-control  my-2" value="{{ $user->tel }}" placeholder="例：03-123-4567">
								</td>
						</tr>
					@endforeach
					</table>
					<label><input type="checkbox" name="address_check">この住所情報をマイページに登録する</label><br>
					<p class="mt-5" id="selected_reward">決済情報</p>
					<table class="table payment_table">
						<thead class="thead-light">
						<tr>
							<th scope="row">決済方法</th>
								<td class="w-75">
									クレジットカード決済
									<img src="/crowd_funding/CrowdFunding/public/storage/visa.gif">
									<img src="/crowd_funding/CrowdFunding/public/storage/jcb.gif">
									<img src="/crowd_funding/CrowdFunding/public/storage/master.gif">
									<img src="/crowd_funding/CrowdFunding/public/storage/ae.gif"><p>
									<small>募集期間内に支援が目標金額に達した場合のみ、クレジットカード決済が行われます</small>
				@if(array_has($payments,'0.card_no'))
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
										<label class="form-check-label" for="inlineRadio1">登録済みカードで決済</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										<label class="form-check-label" for="inlineRadio2">カード番号を入力</label>
									</div>
								</td>
						</tr>
						<tr>
							<th scope="row">カード選択</th>
							<td>
								@foreach($payments as $payment)
								<div class="form-group">
									<select class="custom-select rounded-0" name="card_no">
										<option value="{{$payment->card_no}}">{{$payment->card_no}}</option>
									</select>
								@endforeach
								</div>
							</td>
						</tr>
					@else
						<tr>
							<th scope="row">カード番号</th>
							<td class="w-75">
								<small>半角英数でご入力ください。</small>
								<div class="form-group">
									<input type="text" name="card_no" class="form-control rounded-0" value="{{ old('card_no') }}" placeholder="●●●● ●●●● ●●●● ●●●●">
								</div>
								<p></p>
							</td>
						</tr>
						<tr>
							<th scope="row">有効期限</th>
							<td class="w-75">
								<div class="form-group row">
									<div class="col">
										<input type="text" name="exp_mon" class="form-control rounded-0" value="{{ old('exp_mon') }}" placeholder="MM">
									</div>/
									<div class="col">
										<input type="text" name="exp_year" class="form-control rounded-0" value="{{ old('exp_year') }}" placeholder="YY">
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th scope="row">セキュリティ番号</th>
							<td class="w-75">
								<div class="form-group">
									<input type="text" name="card_csv" class="form-control rounded-0" placeholder="例：123">
								</div>
							</td>
						</tr>
						<tr>
							<th scope="row">カード名義</th>
							<td class="w-75">
								<div class="form-group row">
									<div class="col">
										<input type="text" name="first_name" class="form-control rounded-0" value="{{ old('first_name') }}" placeholder="例：TARO">
									</div>/
									<div class="col">
										<input type="text" name="last_name" class="form-control rounded-0" value="{{ old('last_name') }}" placeholder="例：YAMADA">
									</div>
								</div>
								@endif
							</td>
						</tr>
					</table>
					<label><input type="checkbox" class="mb-4" name="card_check">カード情報を保存する</label>
						<p>※入力された配送先情報は、本プロジェクト起案者に提供されます</p>
						@csrf
						<label><input type="checkbox" class="terms_check" required><a href="{{ '/crowd_funding/CrowdFunding/public/terms' }}">利用規約</a>に同意する</label>
						<button type="submit" name="action" class="btn btn-primary" value="confirm">確認画面へ進む</button>
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
