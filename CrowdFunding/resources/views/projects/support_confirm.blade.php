@extends('layouts.layout')

@section('content')

<div class="col-md-7">
	<div class="container">
		<form action="{{ 'projects/commit' }}" method="POST" enctype="multipart/form-data">
			<h3 class="py-3" id="pj_title"></h3>
			<div class="shadow-sm p-3 mb-5 bg-white rounded">
				<p class="py-3 mx-auto" id="selected_reward">内容をご確認の上、
確定ボタンより決済画面にお進みください。</p>
				<div class="reward_container">
					<table class="table selected_reward_table">
						<tr>
							<th scope="row"><img src="./storage/{{$reward->rw_image }}"></th>
								<td>
									<p>{{ $reward->rw_title }}</p>
									<p>限定 {{ $reward->rw_quantity }} 個</p>
									<p>¥ {{ number_format($reward->rw_price) }}</p>
									<p>{{ $reward->rw_body }}
									<p>予定配送時期 {{ $reward->rw_season }}
									<p>{{  $supporter }} 人が支援
									<br>残り {{ $reward->rw_quantity - $supporter }} 個
								</td>
						</tr>
					</table>
						<tr>
							<th scope="row">コメント</th>
							<td class="comments"><textarea placeholder="例：応援しています。"></textarea><br>
						</tr>
				</table>
				<p>配送先情報</p>
				<table class="table shipping_table">
					<tr>
						<th scope="row">氏名</th>
							<td><input type="text" class="form-control rounded-0 my-2" value="{{ $user->name }}"></td>
					</tr>
					<tr>
						<th scope="row">フリガナ</th>
							<td><input type="text" class="form-control rounded-0 my-2" value="{{ $user->furigana }}"></td>
					</tr>
					<tr>
						<th scope="row">郵便番号</th>
							<td><input type="text" class="form-control rounded-0 my-2" value="{{ $user->post_code }}"></td>
					</tr>
					<tr>
						<th scope="row">都道府県市区町村</th>
							<td><input type="text" class="form-control rounded-0 my-2" value="{{ $user->address }}"></td>
					</tr>
					<tr>
						<th scope="row">番地・建物名</th>
							<td><input type="text" class="form-control rounded-0 my-2" value="{{ $user->building }}"></td>
					</tr>
					<tr>
						<th scope="row">電話番号</th>
							<td><input type="text" class="form-control rounded-0 my-2" value="{{ $user->tel }}"></td>
					</tr>
				</table>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@include('footer')
