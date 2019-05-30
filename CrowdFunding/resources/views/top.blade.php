@extends('layout')

@section('content')

	<div class="content top_bannner">
		<img src="img/header_1.png" class="img-fluid">
	</div>
	<div class="input-group position-absolute top_search">
		<input type="text" class="form-control rounded-0" placeholder="プロジェクトを検索" aria-label="Recipient's username" aria-describedby="button-addon2">
		<div class="col-md-9">
			<button class="btn btn-primary rounded-0" type="button" id="button-addon2">検索</button>
		</div>
	</div>
@endsection

@include('footer')
