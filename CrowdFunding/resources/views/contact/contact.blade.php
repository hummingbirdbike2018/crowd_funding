@extends('layouts.layout')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<h1>お問い合わせ</h1>
	</div>
	<div class="row justify-content-center">
		<form action="contact/confirm" method="post">
			<div class="form-group">
				<label for="InputEmail">メールアドレス</label>
				<div class="col-xs-6">
					<input type="email" name="email" class="form-control" id="InputEmail" value="{{ old('email') }}">
				</div>
				@if($errors->has('email'))
					<p class="text-danger">{{ $errors->first('email')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="InputSubject">件名</label>
				<div class="col-xs-6">
					<input type="text" name="subject" class="form-control" id="InputSubject" value="{{ old('subject') }}">
				</div>
				@if($errors->has('subject'))
					<p class="text-danger">{{ $errors->first('subject')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="InputMessage">メッセージ</label>
				<div class="col-xs-6">
					<textarea name="message" id="InputMessage" class="form-control" cols="40" rows="4">
					{{ old('message') }}
					</textarea>
				</div>
				@if($errors->has('message'))
					<p class="text-danger">{{ $errors->first('message')}}</p>
				@endif
			</div>
			@csrf
			<button type="submit" name="action" class="btn btn-primary" value="sent">送信する</button>
		</form>
	</div>
</div>
@endsection
@include('footer')
