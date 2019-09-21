@extends('layouts.layout')
@section('content')
<div class= "container">
	<form action="{{ route('user.store_basic') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class= "edit_user is_basic mx-auto border p-5 col-md-6 bg-light">
			<h5 class="my-4">基本情報</h5>
				<label for="display">{{ __('表示名') }}</label>
				<input id="display" class="form-control  mb-2" name="display" value="{{ $user->display }}">
				@if($errors->first('display'))
					<div class="text text-danger">
						{{$errors->first('display')}}<br>
					</div>
				@endif
					<small>
						<p class="font-weight-light mt-5">メールアドレスを変更する場合は、新しいメールアドレスを入力してください。
						<br>新しいメールアドレスに確認メールが送信されます。</p>
					</small>
				<label for="email">{{ __('メールアドレス') }}</label>
				<input id="email" class="form-control mb-2" name="email" value="{{ $user->email }}">
				@if($errors->first('email'))
					<div class="text text-danger">
						{{$errors->first('email')}}<br>
					</div>
				@endif
					<small>
						<p class="font-weight-light mt-5">パスワードを変更する場合は入力してください。</p>
					</small>
				<label for="password">{{ __('現在のパスワード') }}</label>
				<input id="password" class="form-control mb-2" name="password">
				@if($errors->first('password'))
					<div class="text text-danger">
						{{$errors->first('password')}}<br>
					</div>
				@endif
				<label for="new_password">{{ __('新しいパスワード') }}</label>
				<input id="new_password" class="form-control mb-2" name="new_password">
				@if($errors->first('new_password'))
					<div class="text text-danger">
						{{$errors->first('new_password')}}<br>
					</div>
				@endif
				<label for="password_confirmation">{{ __('新しいパスワード確認用') }}</label>
				<input id="password_confirmation" class="form-control mb-3" name="password_confirmation">
				@if($errors->first('confirm_password'))
					<div class="text text-danger">
						{{$errors->first('confirm_password')}}<br>
					</div>
				@endif
			<h5 class="mt-5 mb-4">アイコン設定</h5>
				<small>
					<br class="font-weight-light">支援の際の応援コメントなどに表示されます。<p>
				</small>
				<div class="row">
					<div class="col col-md-6">
						@if($user->user_img == null)
						<img src="../../../storage/app/storage/user_img/default/user_default_img.png" width="50px" height="50px">
						@else
						<img src="../../../storage/app/storage/user_img/user_{{$user->id}}/{{ $user->user_img }}" width="50px" height="50px">
						@endif
					</div>
					<div class="col col-md-6">
						<input type="file" class="form-control-file mb-2" name="user_img">
						@if($errors->first('user_img'))
							<div class="text text-danger">
								{{$errors->first('user_img')}}<br>
							</div>
						@endif
					</div>
				</div>
			<input class="btn btn-primary mt-5" type="submit" value="基本情報を更新">
		</div>
	</form>
</div>

@endsection
@include('footer')
