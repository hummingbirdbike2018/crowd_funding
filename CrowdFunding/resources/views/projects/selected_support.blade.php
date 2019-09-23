@extends('layouts.layout')
@section('content')

<div id="payment">
	<div class="container bg-light">
		<div class="heading-container">
			<h4 class="py-3 text-center" id="pj_title">{!! nl2br(e( $project->pj_title )) !!}</h4>
		</div>
		<div class="row">
			<div class="col-md-7">
				<form action="{{ $reward->id.'/confirm' }}" method="POST" enctype="multipart/form-data">
					<div class="shadow-sm p-3 mb-5 bg-white rounded">
						<!-- 支援内容 -->
						<p class="py-3 " id="selected_reward">支援内容</p>
						<div class="reward_container">
							<table class="table selected_reward_table">
								<tr>
									<th scope="row"><img src="../../../../storage/product_img/project_{{$reward->pj_id}}/{{$reward->rw_image }}"></th>
									<td>
										<h5 class="selected-card-title">{!! nl2br(e( $reward->rw_title )) !!}</h5>
										<input type="hidden" name="rw_title"  value="{{ $reward->rw_title }}">
										<p class="quantity">限定 {{ $reward->rw_quantity }} 個</p>
										<input type="hidden" name="rw_quantity"  value="{{ $reward->rw_quantity }}">
										<p class="rw_price">¥ {{ number_format($reward->rw_price) }}</p>
										<input type="hidden" name="rw_price"  value="¥ {{ number_format($reward->rw_price) }}">
										<p>{!! nl2br(e( $reward->rw_body )) !!}</p>
										<input type="hidden" name="rw_body"  value="{{ $reward->rw_body }}">
										<p>予定配送時期 {!! nl2br(e( $reward->rw_season )) !!}</p>
										<input type="hidden" name="rw_season"  value="{{ $reward->rw_season }}">
										<p class="supporter">{{  $supporter }} 人が支援</p>
										<input type="hidden" name="supporter"  value="{{ $reward->supporter }}">
										<p class="stock">残り {{ $reward->rw_quantity - $supporter }} 個</p>
										<input type="hidden" name="stock"  value="{{ $reward->rw_quantity - $supporter }}">
									</td>
								</tr>
							</table>
							<a  class="float-right" href="{{'select'}}">リターンを変更する</a>
							<table class="table selected_reward_misc">
								<thead class="thead-light">
								<tr>
									<th scope="row">支援額</th>
									<td class="selected-reward-price">¥　{{ number_format($reward->rw_price) }}</td>
								</tr>
								<tr>
									<th scope="row">コメント</th>
									<td class="w-75">
										<textarea class="w-75" name="comment" value="{{ old('comment') }}" placeholder="例：応援しています。" cols="20" rows="2"></textarea>
										@if($errors->has('comment'))
											@foreach($errors->get('comment') as $message)
											<div class="text text-danger">
												{{ $message }}<br>
											</div>
											@endforeach
										@endif
										<br>
										<p class="support-comment-notice">※記載したコメントと登録名は、支援したプロジェクトページの「応援コメント」欄に掲載されますので、個人情報に関する投稿はお控え下さい。</p>
									</td>
								</tr>
							</table>

							<!-- 配送先情報 -->
							<p class="mt-5" id="selected_reward">配送先情報</p>
							<table class="table shipping_table">
								@foreach($users as $user)
									<thead class="thead-light">
									<tr>
										<th scope="row">氏名</th>
										<td class="w-75">
											<input type="text" name="name" class="form-control my-2" value="{{ $user->name }}" maxlength="30" placeholder="例：山田　太郎">
											@if($errors->has('name'))
												@foreach($errors->get('name') as $message)
												<div class="text text-danger">
													{{ $message }}<br>
												</div>
												@endforeach
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row">フリガナ</th>
										<td class="w-75">
											<input type="text" name="name_kana" class="form-control my-2" value="{{ $user->name_kana }}" maxlength="30" placeholder="例：ヤマダ　タロウ">
											@if($errors->has('name_kana'))
												@foreach($errors->get('name_kana') as $message)
												<div class="text text-danger">
													{{ $message }}<br>
												</div>
												@endforeach
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row">郵便番号</th>
										<td class="w-75">
											<input type="text" name="post_code" class="form-control my-2" value="{{ $user->post_code }}" maxlength="8" placeholder="例：150-0034">
											@if($errors->has('post_code'))
												@foreach($errors->get('post_code') as $message)
												<div class="text text-danger">
													{{ $message }}<br>
												</div>
												@endforeach
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row">都道府県市区町村</th>
										<td class="w-75">
											<input type="text" name="address" class="form-control my-2" value="{{ $user->address }}" maxlength="30" placeholder="例：東京都渋谷区代官山町">
											@if($errors->has('address'))
												@foreach($errors->get('address') as $message)
												<div class="text text-danger">
													{{ $message }}<br>
												</div>
												@endforeach
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row">番地・建物名</th>
										<td class="w-75">
											<input type="text" name="building" class="form-control my-2" value="{{ $user->building }}" maxlength="30" placeholder="例：1-1">
											@if($errors->has('building'))
												@foreach($errors->get('building') as $message)
												<div class="text text-danger">
													{{ $message }}<br>
												</div>
												@endforeach
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row">電話番号</th>
										<td class="w-75">
											<input type="text" name="tel" class="form-control my-2" value="{{ $user->tel }}" maxlength="13" placeholder="例：03-123-4567">
											@if($errors->has('tel'))
												@foreach($errors->get('tel') as $message)
												<div class="text text-danger">
													{{ $message }}<br>
												</div>
												@endforeach
											@endif
										</td>
									</tr>
								@endforeach
							</table>
							<label><input type="checkbox" name="address_check">この住所情報をマイページに登録する</label><br>

							<!-- 決済情報 -->
							<p class="mt-5" id="selected_reward">決済情報</p>
							<table class="table payment_table">
								<thead class="thead-light">
								<tr>
									<th scope="row">決済方法</th>
									<td class="w-75">
										クレジットカード決済
										<img src="../../../../storage/payment/card_icon.png">
										<p class="payment-card-notice">募集期間内に支援が目標金額に達した場合のみ、クレジットカード決済が行われます</p>
										<div class="form-check form-check-inline">
											<label><input class="form-check-input" type="radio" v-on:change="handler" name="paymentSelectRadio" id="paymentSelectRadio1" value="option1" checked>登録済みカードで決済</label>
										</div>
										<div class="form-check form-check-inline">
											<label><input class="form-check-input" type="radio" v-on:change="handler" name="paymentSelectRadio" id="paymentSelectRadio2" value="option2">カード番号を入力</label>
										</div>
									</td>
								</tr>
								<tr v-if="select">
									<th scope="row">カード選択</th>
									<td>
										<div class="form-group">
											<select class="custom-select rounded-0" name="card_no">
												@for($i = 0; $i < count($payment); $i++)
												<option value="{{$reg_card_list[$i]}}">{{$reg_card_list[$i]}}</option>
												@endfor
											</select>
										</div>
									</td>
								</tr>
								<tr v-if="show">
									<th scope="row">カード番号</th>
									<td class="w-75">
										<small>半角英数でご入力ください。</small>
										<div class="form-group">
											<input v-model="number" type="text" name="card_no" class="form-control rounded-0" value="card_no" maxlength="16" placeholder="**** **** **** ****">
										</div>
										<font color="red">@{{message}}</font>
									</td>
								</tr>
								<tr v-if="show">
									<th scope="row">有効期限</th>
									<td class="w-75">
										<div class="form-group row">
											<div class="col">
												<select class="custom-select rounded-0" name="exp_mon">
													@for($i = 1; $i <= 12; $i++)
													<option value="{{$i}}">{{$i}}</option>
													@endfor
												</select>
													@foreach($errors->get('exp_mon') as $message)
													<div class="text text-danger">
														{{ $message }}<br>
													</div>
													@endforeach
											</div>
											<div class="col">
												<select class="custom-select rounded-0" name="exp_year">
													@for($i = idate("Y"); $i <= (idate("Y") + 15); $i++)
													<option value="{{$i}}">{{$i}}</option>
													@endfor
												</select>
												@if($errors->has('exp_year'))
													@foreach($errors->get('exp_year') as $message)
													<div class="text text-danger">
														{{ $message }}<br>
													</div>
													@endforeach
												@endif
											</div>
										</div>
									</td>
								</tr>
								<tr v-if="show">
									<th scope="row">セキュリティ番号</th>
									<td class="w-75">
										<div class="form-group">
											<input type="text" name="card_csv" class="form-control rounded-0 w-25" maxlength="3" placeholder="例：xxx">
											@if($errors->has('card_csv'))
												@foreach($errors->get('card_csv') as $message)
												<div class="text text-danger">
													{{ $message }}<br>
												</div>
												@endforeach
											@endif
										</div>
									</td>
								</tr>
								<tr v-if="show">
									<th scope="row">カード名義</th>
									<td class="w-75">
										<div class="form-group row">
											<div class="col">
												<input type="text" name="card_holder_name" class="form-control rounded-0" value="{{ old('card_holder_name') }}" placeholder="例：TARO YAMADA">
												<span class="font-small">英字大文字で姓名の間にはスペースを入れてください</span>
												@if($errors->has('card_holder_name'))
													@foreach($errors->get('card_holder_name') as $message)
													<div class="text text-danger">
														{{ $message }}<br>
													</div>
													@endforeach
												@endif
											</div>
										</div>
									</td>
								</tr>
							</table>
							<label v-if="show"><input type="checkbox" class="mb-2" name="card_check">カード情報を保存する</label><br>
							@csrf
							<label><input type="checkbox" class="terms_check" name="terms_check"><a href="{{ '/crowd_funding/CrowdFunding/public/terms' }}">利用規約</a>に同意する</label>
							@if($errors->has('terms_check'))
								@foreach($errors->get('terms_check') as $message)
								<div class="text text-danger">
									{{ $message }}<br>
								</div>
								@endforeach
							@endif
							<button type="submit" name="action" class="btn btn-primary" value="confirm">確認画面へ進む</button>
							<div class="suppport_notice">
								【要確認】<br>
									・残り{{ $period }} 日で支援総額が¥{{ number_format($project->target_amount) }}に達しない場合は、プロジェクト不成立となりカードの決済は行われません。また、リターンも発生しません。<br>
									・支援を行うには、有効期限が残り100日以上の各種クレジットカードが必要です。<br>
							</div>
						</div>
					</div>
				</form>
			</div>

			<!-- プロジェクトプロパティ -->
			<div class="col col-md-5">
				<div class="shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;">
					<div class="text text-muted">現在の支援総額</div>
					<strong>
						<span class="text-black display-4v total_amount">¥{{ number_format($total_amount) }}</span>
					</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{$percent_complete}}" aria-valuemin="0"
							aria-valuemax="100" style="width:{{$percent_complete}}%">
							{{$percent_complete}}%
						</div>
					</div>
					<div class="text-muted">目標金額 ¥{{ number_format($project->target_amount) }}</div>
					<div class="border"></div>
					<table class="table table-borderless">
						<thead>
							<tr>
								<th scope="col">
									<i class="fas fa-users"> 支援者数</i>
								</th>
								<th scope="col">
									<i class="far fa-clock"> 残り期間</i>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="project-supporter">{{ array_sum($supporter_list) }} 人</td>
								<td class="project-period">{{ $period }} 日</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@include('footer')
