@extends('layout')

@section('content')
<div class= "container">
	<form action="{{ 'edit' }}" method="POST">
		@csrf
		<div class="edit_user row">
			<div class= "edit_user is_basic col col-md-3 mx-auto">
				<h5 class="mt-4 mb-4">基本情報</h5>
			@foreach($users as $user)
				<label for="display">{{ __('表示名') }}</label>
				<input id="display" class="form-control rounded-0 mb-4" value="{{ $user->display }}">
				<small>
					<p class="font-weight-light">メールアドレスを変更する場合は、新しいメールアドレスを入力してください。
					<br>新しいメールアドレスに確認メールが送信されます。</p>
				</small>
				<label for="email">{{ __('メールアドレス') }}</label>
				<input id="email" class="form-control rounded-0 mb-5" value="{{ $user->email }}">
				<small>
					<p class="font-weight-light">パスワードを変更する場合は入力してください。</p>
				</small>
				<label for="password">{{ __('現在のパスワード') }}</label>
				<input id="password" class="form-control rounded-0 mb-2" value="">
				<label for="new_password">{{ __('新しいパスワード') }}</label>
				<input id="new_password" class="form-control rounded-0 mb-5">
				<input class="btn btn-primary rounded-0 float-right" type="submit" value="基本情報を更新">
			</div>
		<span class="border-right"></span>
			<div class= "edit_user is_address col col-md-3 mx-auto">
				<h5 class="mt-4 mb-4">配送先情報</h5>
				<small>
					<p class="font-weight-light text-danger">リターンの配送先となりますので、お間違いのないようお願いいたします。</p>
				</small>
				<label for="name">{{ __('氏名') }}</label>
				<input id="name" class="form-control rounded-0 mb-2" value="{{ $user->name }}">
				<label for="furigana">{{ __('ふりがな') }}</label>
				<input id="furigana" class="form-control rounded-0 mb-2" value="{{ $user->furigana }}">
				<label for="tel">{{ __('電話番号') }}</label>
				<input id="tel" class="form-control rounded-0 mb-2" value="{{ $user->tel }}">
				<label for="post_code">{{ __('郵便番号') }}</label>
				<input id="post_code" class="form-control rounded-0 mb-2" value="{{ $user->post_code }}">
				<label for="address">{{ __('住所') }}</label>
				<input id="address" class="form-control rounded-0 mb-2" value="{{ $user->address }}">
				<label for="building">{{ __('建物名') }}</label>
				<input id="building" class="form-control rounded-0 mb-5" value="{{ $user->building }}">
			@endforeach
				<input class="btn btn-primary rounded-0 float-right" type="submit" value="配送先情報を更新">
			</div>
		</div>
	</form>
</div>
<div class="container">
	<div class="edit_user row">
		<div class="edit_user is_icon col col-md-3 mx-auto" style="width: 810px;">
			<h5 class="mt-5 mb-4">アイコン設定</h5>
				<small>
					<p class="font-weight-light">支援の際の応援コメントなどに表示されます。</p>
				</small>
			<input type="file" class="form-control-file mb-5" id="upload_file">
			<input class="btn btn-primary rounded-0 float-right" type="submit" method="POST" value="アイコンを設定">
		</div>
	<span class="border-right"></span>
		<div class="edit_user is_disable col col-md-3 mx-auto" style="width: 810px;">
			<h5 class="mt-5 mb-5">退会</h5>
				<small>
					<p class="font-weight-light text-danger">クリックすると退会処理画面へ移動します</p>
				</small>
				<a class="btn btn-secondary rounded-0 float-right" href="{{ 'disable' }}" role="button">退会</a>
		</div>
	</div>
</div>

@endsection

@include('footer')
