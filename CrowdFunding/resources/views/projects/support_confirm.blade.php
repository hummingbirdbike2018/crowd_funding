@extends('layouts.layout')

@section('content')

<div class="container">
	<div class="shadow-sm p-3 mb-5 bg-white rounded">
		<p class="font-weight-light">内容をご確認の上、
			確定ボタンより決済画面にお進みください。</p>
		<form action="{{ 'payment' }}" method="post">
			<!--  支援情報  -->
			<table class="table">
				<tbody>
					<tr>
						<thead class="thead-light">
							<th scope="row">支援額</th>
							@foreach($rewards as $reward)
							<td>¥ {{ number_format($reward->rw_price) }}</td>
					</tr>
					<tr>
						<th scope="row">リターン内容</th>
						<td>{{$reward->rw_body}}</td>
							@endforeach
					</tr>
					<tr>
						<th scope="row" >コメント</th>
						@if($request->comment == null)
						<td>（記入なし）</td>
						@else
						<td>{{$request->comment}}</td>
						@endif
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
							<td>{{$request->name}}</td>
							</tr>
					<tr>
						<th scope="row">フリガナ</th>
						<td>{{$request->name_kana}}</td>
					</tr>
					<tr>
						<th scope="row" >郵便番号</th>
						<td>〒{{$request->post_code}}</td>
					</tr>
					<tr>
						<th scope="row">住所</th>
						<td>{{$request->address}}</td>
					</tr>
					<tr>
						<th scope="row">建物名</th>
						<td>{{$request->building}}</td>
					</tr>
					<tr>
						<th scope="row">電話番号</th>
						<td>{{$request->tel}}</td>
					</tr>
					<tr>
						<th scope="row">メールアドレス</th>
						<td>{{$request->email}}</td>
					</tr>
				</tbody>
			</table>
				@csrf
			<button type="submit" name="action" class="btn btn-light rounded-0" value="back">内容を修正する</button>
			<button type="submit" name="action" class="btn btn-primary rounded-0" value="next">決済画面へ進む</button>
		</form>
	</div>
</div>
@endsection

@include('footer')
