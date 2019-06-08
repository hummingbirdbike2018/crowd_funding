<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<!-- CSS -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- script -->
	<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
	<header>
		<div id="app">
				<nav class="navbar navbar-expand-md navbar-dark bg-primary">
						<div class="container">
								<a class="navbar-brand" href="{{ url('/') }}">
										{{ config('app.name', 'Laravel') }}
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
										<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<!-- Left Side Of Navbar -->
										<ul class="navbar-nav mr-auto">
										</ul>
										<!-- Right Side Of Navbar -->
										<ul class="navbar-nav ml-auto">
												<!-- Authentication Links -->
												@guest
														<li class="nav-item">
																<a class="nav-link waves-effect waves-light" href="{{ 'contact' }}">
																		<i class="fas fa-envelope"> お問い合わせ</i>
																</a>
														</li>
														<li class="nav-item dropdown">
																<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
																		aria-haspopup="true" aria-expanded="false">
																		<i class="fas fa-user"> メニュー</i>
																</a>
																<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
																		<!-- ログイン画面モーダルトリガー -->
																		<a class="dropdown-item" data-toggle="modal" data-target="#LoginModal" href="#login">ログイン</a>
																		<!-- 新規登録画面モーダルトリガー -->
																		@if (Route::has('register'))
																		<a class="dropdown-item" data-toggle="modal" data-target="#RegisterModal" href="#register">新規登録</a>
																		@endif
																</div>
														</li>
												@else
														<li class="nav-item">
																<a class="nav-link waves-effect waves-light" href="#">
																		<i class="fas fa-envelope"> お問い合わせ</i>
																</a>
														</li>
														<li class="nav-item dropdown">
																<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
																		aria-haspopup="true" aria-expanded="false">
																		<i class="fas fa-user"> メニュー</i>
																</a>
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
																				<a class="dropdown-item"  href="{{ 'user/{id}/top' }}">マイページ</a>
																				<a class="dropdown-item"  href="{{ 'user/{id}/edit' }}">会員情報変更</a>
																				<a class="dropdown-item" href="{{ route('logout') }}"
																						onclick="event.preventDefault();
																						document.getElementById('logout-form').submit();">
																						{{ __('ログアウト') }}
																				</a>
																				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																						@csrf
																				</form>
																		</div>
														</li>
												@endguest
										</ul>
								</div>
						</div>
				</nav>

				<!-- ログイン画面モーダル -->
				<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
										<div class="modal-header alert alert-primary rounded-0">
												<h6 class="modal-title" id="LoginModalCenterTitle">ログイン画面</h6>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
												</button>
										</div>
										<div class="modal-body">
												<form method="POST" action="{{ route('login') }}">
														@csrf
														<div class="form-group row">
																<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>
																<div class="col-md-6">
																		<input id="email" type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
																		@error('email')
																				<span class="invalid-feedback" role="alert">
																						<strong>{{ $message }}</strong>
																				</span>
																		@enderror
																</div>
														</div>
														<div class="form-group row">
																<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>
																<div class="col-md-6">
																		<input id="password" type="password" class="form-control rounded-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
																		@error('password')
																				<span class="invalid-feedback" role="alert">
																						<strong>{{ $message }}</strong>
																				</span>
																		@enderror
																</div>
														</div>
														<div class="form-group row">
																<div class="col-md-6 offset-md-4">
																		<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
																				<label class="form-check-label" for="remember">
																						{{ __('ログイン状態を保存') }}
																				</label>
																		</div>
																</div>
														</div>
														<div class="form-group row mb-0">
																<div class="col-md-6 offset-md-4 btn-group-sm">
																		<button type="submit" class="btn btn-primary rounded-0">
																				{{ __('ログイン') }}
																		</button>
																		@if (Route::has('password.request'))
																				<a class="btn btn-link" href="{{ route('password.request') }}">
																						{{ __('パスワードを忘れた方はこちら') }}
																				</a>
																		@endif
																</div>
														</div>
												</form>
										</div>
								</div>
						</div>
				</div>
				<!-- 新規登録画面モーダル -->
				<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
										<div class="modal-header alert alert-primary">
												<h6 class="modal-title" id="RegisterModalCenterTitle">新規登録画面</h6>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
														</button>
										</div>
										<div class="modal-body">
												<div class="container">
														<form method="POST" action="{{ route('register') }}">
																@csrf
																<div class="form-group row">
																		<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>
																		<div class="col-md-6">
																				<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
																				@error('email')
																						<span class="invalid-feedback" role="alert">
																								<strong>{{ $message }}</strong>
																						</span>
																				@enderror
																		</div>
																</div>
																<div class="form-group row">
																		<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>
																		<div class="col-md-6">
																				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
																						@error('password')
																								<span class="invalid-feedback" role="alert">
																										<strong>{{ $message }}</strong>
																								</span>
																						@enderror
																		</div>
																</div>
																<div class="form-group form-check">
																		<div class="col-md-6 offset-md-4 btn-group-sm">
																				<input type="checkbox" class="form-check-input" id="terms_chk" required>
																				<label class="form-check-label" for="terms-check">
																						<a href="{{ 'terms' }}">利用規約</a>に同意する
																				</label>
																		</div>
																</div>
																<div class="form-group row mb-0">
																		<div class="col-md-6 offset-md-5 btn-group">
																				<button type="submit" class="btn btn-primary">
																						{{ __('登録') }}
																				</button>
																		</div>
																</div>
														</form>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		@yield('footer')
	</footer>
</body>
</html>
