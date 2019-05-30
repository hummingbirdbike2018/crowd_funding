@extends('layout')

@section('content')

<div class= "container">
	<div class="edit_user row">
		<div class= "edit_user is_basic col col-md-3 mx-auto">
			<h5 class="mt-4 mb-4">基本情報</h5>
			<label for="display">{{ __('表示名') }}</label>
			<input id="display" class="form-control rounded-0" value="{{ old('display') }}">
			<label for="email">{{ __('メールアドレス') }}</label>
			<input id="email" class="form-control rounded-0 mb-5" value="{{ old('email') }}">
			<small>
			<p class="font-weight-light">パスワードを変更する場合は入力してください。</p>
			</small>
			<label for="password">{{ __('パスワード') }}</label>
			<input id="password" class="form-control rounded-0">
			<label for="password_confirm">{{ __('パスワード(確認用)') }}</label>
			<input id="password_confirm" class="form-control rounded-0 mb-4">
			<div class="form-group form-check">
			</div>
			<div class="col-md3 float-right">
			<input class="btn btn-primary rounded-0" type="submit" action="POST" value="基本情報を更新">
			</div>
		</div>
	<span class="border-right"></span>
		<div class= "edit_user is_address col col-md-3 mx-auto">
			<h5 class="mt-4 mb-4">配送先情報</h5>
			<label for="name">{{ __('氏名') }}</label>
			<input id="name" class="form-control rounded-0" value="{{ old('name') }}">
			<label for="furigana">{{ __('ふりがな') }}</label>
			<input id="furigana" class="form-control rounded-0" value="{{ old('furigana') }}">
			<label for="tel">{{ __('電話番号') }}</label>
			<input id="tel" class="form-control rounded-0" value="{{ old('tel') }}">
			<label for="post_code">{{ __('郵便番号') }}</label>
			<input id="post_code" class="form-control rounded-0" value="{{ old('post_code') }}">
			<label for="address">{{ __('住所') }}</label>
			<input id="address" class="form-control rounded-0" value="{{ old('address') }}">
			<label for="building">{{ __('建物名') }}</label>
			<input id="building" class="form-control rounded-0 mb-4" value="{{ old('building') }}">
			<div class="form-group form-check">
			</div>
			<small>
			<p class="font-weight-light text-danger">リターンの配送先となりますので、お間違いのないようお願いいたします。</p>
			</small>
			<div class="col-md-3 mx-auto">
			<input class="btn btn-primary rounded-0" type="submit" action="POST" value="配送先情報を更新">
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="edit_user row">
		<div class="edit_user is_icon col col-md-3 mx-auto" style="width: 810px;">
			<h5 class="mt-5 mb-4">アイコン設定</h5>
				<small>
					<p class="font-weight-light">アイコンに設定できるサイズは80x80です。</p>
				</small>
			<input type="file" class="form-control-file" id="upload_file">
		</div>
		<div class="edit_user is_disable col col-md-3 mx-auto" style="width: 810px;">
			<h5 class="mt-5 mb-4">退会</h5>
				<small>
					<p class="font-weight-light text-danger">クリックすると退会処理画面へ移動します</p>
				</small>
				<a class="btn btn-secondary rounded-0 " href="#" role="button">退会</a>
		</div>
	</div>
</div>
@endsection
