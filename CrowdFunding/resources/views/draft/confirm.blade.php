@extends('layouts.layout')
@section('title','起案に関するお問い合わせ内容の確認')

@section('content')
<div class="container">
	<h1 class="mx-auto" style="width: 615px;">起案に関するお問い合わせ内容の確認</h1>
	<p class="mx-auto" style="width: 680px;">下記、起案に関するお問い合わせの内容にて送信します。よろしければ「送信」ボタンを押して下さい。</p>

	<form action="sent" method="post">
		<!-- <input type="hidden" name="email" class="form-control" id="InputEmail" value="">
		<input type="hidden" name="subject" class="form-control" id="InputSubject" value="">
		<input type="hidden" name="message" class="form-control" id="InputMessage" value=""> -->
		@csrf
		<button type="submit" name="action" class="btn btn-primary" value="back">戻る</button>
		<button type="submit" name="action" class="btn btn-primary" value="sent">送信</button>
	</form>
</div>
@endsection
