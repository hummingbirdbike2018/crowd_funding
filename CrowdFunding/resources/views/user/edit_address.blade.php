@extends('layouts.layout')
@section('content')
<div class="container">
	<form action="{{ route('user.store_address') }}" method="POST" enctype="multipart/form-data">
			@csrf
		<div class= "edit_user_address mx-auto border p-5 col-md-8 bg-light">
			<div class= "is_address">
				<h5 class="mt-4 mb-4">配送先情報</h5>
					<p class="text-danger">リターンの配送先となりますので、お間違いのないようお願いいたします。</p>
				<label for="name">{{ __('氏名') }}</label>
				<input id="name" class="form-control  mb-2" name="name" value="{{ $user->name }}">
				@if($errors->first('name'))
					<div class="text text-danger">
						{{$errors->first('name')}}<br>
					</div>
				@endif
				<label for="name_kana">{{ __('ふりがな') }}</label>
				<input id="name_kana" class="form-control  mb-2" name="name_kana" value="{{ $user->name_kana }}">
				@if($errors->first('name_kana'))
					<div class="text text-danger">
						{{$errors->first('name_kana')}}<br>
					</div>
				@endif
				<label for="tel">{{ __('電話番号') }}</label>
				<input id="tel" class="form-control  mb-2" name="tel" value="{{ $user->tel }}">
				@if($errors->first('tel'))
					<div class="text text-danger">
						{{$errors->first('tel')}}<br>
					</div>
				@endif
				<label for="post_code">{{ __('郵便番号') }}</label>
				<input id="post_code" class="form-control  mb-2" name="post_code" value="{{ $user->post_code }}">
				@if($errors->first('post_code'))
					<div class="text text-danger">
						{{$errors->first('post_code')}}<br>
					</div>
				@endif
				<label for="address">{{ __('住所') }}</label>
				<input id="address" class="form-control  mb-2" name="address" value="{{ $user->address }}">
				@if($errors->first('address'))
					<div class="text text-danger">
						{{$errors->first('address')}}<br>
					</div>
				@endif
				<label for="building">{{ __('建物名') }}</label>
				<input id="building" class="form-control  mb-2" name="building" value="{{ $user->building }}">
				@if($errors->first('building'))
					<div class="text text-danger">
						{{$errors->first('building')}}<br>
					</div>
				@endif
				<input class="btn btn-primary mt-5" type="submit" value="配送先情報を更新">
			</div>
		</div>
	</form>
</div>
@endsection
@include('footer')
