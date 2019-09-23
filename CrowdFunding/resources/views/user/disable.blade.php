@extends('layouts.layout')
@section('content')
<div class= "container">
	<form action="{{ route('user.disable.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class= "disable mx-auto border p-3 col-md-12 bg-light">
			<h4 class="my-4 text-center">退会手続き</h4>
				<h5 class="text text-center text-danger">退会されてもリターンは発送されますが<br>
					当サービスの提供する会員サービスがご利用いただけなくなります。<br>
				</h5>
				<div class="row disable-confirm-button mt-5">
					<button type="submit" name="action" class="col-md-2 btn btn-primary mr-3" value="back">キャンセル</button>
					<button type="submit" name="action" class="col-md-2 btn btn-danger ml-3" value="next">退会する</button>
				</div>
			</div>
	</form>
</div>
@endsection
@include('footer')
