<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Laravel') }}</title>
		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<!-- CSS -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<!-- script -->
		<script src="{{ asset('js/app.js') }}" defer></script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-md navbar-dark l-header fixed-top">
				<a class="navbar-brand" href="{{ url('/') }}">
					<img alt="ロゴ" src="/crowd_funding/CrowdFunding/public/img/logo.png" width="110" height="40"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar-header">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item"><a class="nav-link" href="{{ url('/site_info') }}">当サイトについて</a></li>
						<!-- <li class="nav-item"><a class="nav-link" a href="{{ url('/draft') }}">掲載について</a></li> -->
						<li class="nav-item"><a class="nav-link" a href="{{ url('/contact') }}">お問い合わせ</a></li>
					</ul>
					<ul class="navbar-nav ml-auto">
					@guest
						<li class="nav-item"><a class="nav-link" href="#login" data-toggle="modal" data-target="#LoginModal">ログイン</a></li>
						@if (Route::has('register'))
						<li class="nav-item"><a class="nav-link" a href="#register" data-toggle="modal" data-target="#RegisterModal">新規登録</a></li>
						@endif
					@else

						<li class="nav-item dropdown">
							<div class="comment-screen_name">
								<li class="nav-item">ようこそ {{Auth::user()->display}} さん</li>
							</div>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								@if(Auth::user()->user_img != NULL)
								<img class="user_image" src="/crowd_funding/CrowdFunding/storage/app/storage/user_img/user_{{ Auth::id() }}/{{ Auth::user()->user_img }}" alt="user_image">
								@else
								<img class="default_user_image" src="/crowd_funding/CrowdFunding/app/storage/user_img/default/user_default_img.png" alt="default_user_image">
								@endif
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('user.top') }}">マイページ</a>
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
			</nav>

			<!-- ログイン画面モーダル -->
			<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h6 class="modal-title" id="LoginModalCenterTitle">ログイン</h6>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="{{ route('login') }}">
								@csrf
								<div class="form-group row">
									<label for="email" class="col-md-4 col-form-label text-md-right modal-email">{{ __('メールアドレス') }}</label>
									<div class="col-md-6">
										<input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row">
									<label for="password" class="col-md-4 col-form-label text-md-right modal-pass">{{ __('パスワード') }}</label>
									<div class="col-md-6">
										<input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-6 offset-md-3">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
											<label class="check-keep" for="remember">
												{{ __('ログイン状態を保存') }}
											</label>
										</div>
									</div>
								</div>
								<div class="form-group row mb-0">
									<div class="col-md-6 offset-md-3 btn-group-sm">
										<button id="submitLogin" type="submit" class="btn modal-btn">
											{{ __('ログイン') }}
										</button>
										@if (Route::has('password.request'))
										<div class="form-forgot-link">
											<a class="forgot-link" href="{{ route('password.request') }}">
												{{ __('パスワードを忘れた方はこちら') }}
											</a>
										</div>
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
						<div class="modal-header">
							<h6 class="modal-title" id="RegisterModalCenterTitle">新規登録</h6>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="container">
								<form method="POST" action="{{ route('register') }}">
									@csrf
									<div class="form-group row">
										<label for="email" class="col-md-4 col-form-label text-md-right modal-email">{{ __('メールアドレス') }}</label>
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
										<label for="password" class="col-md-4 col-form-label text-md-right modal-pass">{{ __('パスワード') }}</label>
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
										<div class="col-md-6 offset-md-3 btn-group-sm">
											<input type="checkbox" class="form-check-input" id="terms_chk" required>
											<label class="form-check-terms" for="terms-check">
												<a class="check-terms" href="{{ 'terms' }}">利用規約</a>に同意する
											</label>
										</div>
									</div>
									<div class="form-group row mb-0">
										<div class="col-md-6 offset-md-3 btn-group">
											<button type="submit" class="btn modal-btn">
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
		</header>
		<!-- フラッシュメッセージ -->
		@if (session('flash_message'))
		<div class="flash flash-notice l-flash">
			<div class="container">
				{{ session('flash_message') }}
			</div>
		</div>
		@elseif (session('flash_err_message'))
		<div class="flash flash-notice l-flash-err">
			<div class="container">
				{{ session('flash_err_message') }}
			</div>
		</div>
		@endif
		<main>
			@yield('content')
		</main>
		<footer>
			@yield('footer')
		</footer>
	</body>
</html>

@if(Session::has('errors'))
	<script>
	$(document).ready(function(){
		$('#LoginModal').modal({show: true});
	});
	</script>
@endif
