@extends('layouts.layout')


@section('content')
<div class="container user-container">
	<div class="row mb-4">
		<div class="col-sm-6">
			<div class="card shadow">
				<div class="um-card-body">
					<h5 class="um-card-title">基本情報</h5>
					<p class="um-card-text">登録メールアドレス、パスワードの変更、アイコンの設定・削除を行います。</p>
					<a href="{{ route('user.show_basic') }}" class="btn btn-primary d-inline-block float-right">基本情報設定へ</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card shadow">
				<div class="um-card-body">
					<h5 class="um-card-title">配送先情報</h5>
					<p class="um-card-text">リターン配送先住所の確認・変更を行います。</p>
					<a href="{{ route('user.show_address') }}" class="btn btn-primary d-inline-block float-right">配送先情報設定へ</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="card shadow">
				<div class="um-card-body">
					<h5 class="um-card-title">支援プロジェクト</h5>
					<p class="um-card-text">支援したプロジェクトの一覧を表示します。</p>
					<a href="{{ route('user.show_support') }}" class="btn btn-primary d-inline-block float-right">支援プロジェクト一覧へ</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card">
				<div class="um-card-body shadow">
					<h5 class="um-card-title">退会申請</h5>
					<p class="um-card-text">サービスの退会を行います。</p>
					<a href="{{ url('user/top/disable') }}" class="btn btn-primary d-inline-block float-right">退会画面へ</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@include('footer')
