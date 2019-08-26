@extends('layouts.layout')

@section('content')

<div class="container">
	<div class="shadow-sm p-3 mb-5 bg-white rounded">
			<!--  支援情報  -->
		<p class="font-weight-light mt-3">支援情報</p>
		<table class="table">
			<tbody>
				<tr>
					<thead class="thead-light" >
						<th scope="row">支援額</th>
						<td class="w-75 selected-reward-price">{{ $rw_price }}</td>
				</tr>
				<tr>
					<th scope="row">リターン内容</th>
					<td class="w-75">{!! nl2br(e( $rw_body )) !!}</td>
				</tr>
				<tr>
					<th scope="row" >コメント</th>
					@if($comment == null)
					<td class="w-75">（記入なし）</td>
					@else
					<td class="w-75">{!! nl2br(e( $comment )) !!}</td>
					@endif
				</tr>
			</tbody>
		</table>
		<!--  決済情報  -->
		<p class="font-weight-light mt-3">決済情報</p>
		<table class="table">
			<tbody>
				<tr>
					<thead class="thead-light">
						<th scope="row">決済方法</th>
						<td class="w-75">クレジットカード</td>
				</tr>
				<tr>
					<th scope="row">カード情報</th>
					<td class="w-75">{{ $card_no }}</td>
				</tr>
			</tbody>
		</table>
		<!--  配送先情報  -->
		<p class="font-weight-light mt-3">配送先情報</p>
		<table class="table">
			<tbody>
				<tr>
					<thead class="thead-light">
						<th scope="row">お名前</th>
						<td class="w-75">{{$name}}</td>
						</tr>
				<tr>
					<th scope="row">フリガナ</th>
					<td class="w-75">{{$name_kana}}</td>
				</tr>
				<tr>
					<th scope="row" >郵便番号</th>
					<td class="w-75">〒{{$post_code}}</td>
				</tr>
				<tr>
					<th scope="row">住所</th>
					<td class="w-75">{{$address}}</td>
				</tr>
				<tr>
					<th scope="row">建物名</th>
					<td class="w-75">{{$building}}</td>
				</tr>
				<tr>
					<th scope="row">電話番号</th>
					<td class="w-75">{{$tel}}</td>
				</tr>
			</tbody>
		</table>
		<!-- 完了画面POST送信用 -->
		<form action="{{ 'complete' }}" method="POST">
			<input type="hidden" name="rw_price" class="form-control" id="rw_price" value="{{ $rw_price }}">
			<input type="hidden" name="rw_body" class="form-control" id="rw_body" value="{{ $rw_body }}">
			<input type="hidden" name="comment" class="form-control" id="comment" value="{{ $comment }}">
			<input type="hidden" name="card_no" class="form-control" id="card_no" value="{{ $card_no }}">
			<input type="hidden" name="name" class="form-control" id="name" value="{{ $name }}">
			<input type="hidden" name="name_kana" class="form-control" id="name_kana" value="{{ $name_kana }}">
			<input type="hidden" name="post_code" class="form-control" id="post_code" value="{{ $post_code }}">
			<input type="hidden" name="address" class="form-control" id="address" value="{{ $address }}">
			<input type="hidden" name="building" class="form-control" id="building" value="{{ $building }}">
			<input type="hidden" name="tel" class="form-control" id="tel" value="{{ $tel }}">
			<input type="hidden" name="pj_id" class="form-control" id="pj_id" value="{{ $pj_id }}">
			<input type="hidden" name="reward_id" class="form-control" id="reward_id" value="{{ $reward_id }}">
			@csrf
			<div class="row support-confirm-button my-5">
				<button type="submit" name="action" class="col-md-2 btn btn-light mr-3" value="back">内容を修正する</button>
				<button type="submit" name="action" class="col-md-2 btn btn-danger ml-3" value="pay">この内容で支援する</button>
			</div>
		</form>
	</div>
</div>
@endsection

@include('footer')
