@extends('layout')

@section('content')

	<div class="content">
		<img src="img/header_1.png" class="img-fluid topbanner" alt="Responsive image">
	</div>
	<div class="input-group mx-3 mb-1">
		<input type="text" class="form-control" placeholder="プロジェクトを検索" aria-label="Recipient's username" aria-describedby="button-addon2">
		<div class="col-md-9 top-search">
			<button class="btn btn-primary" type="button" id="button-addon2">検索</button>
		</div>
	</div>
@endsection

@include('footer')
