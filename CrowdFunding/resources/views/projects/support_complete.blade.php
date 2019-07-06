@section('content')

<div class="container">
	<div class="shadow-sm p-3 mb-5 bg-white rounded">
		<p class="font-weight-light">以下の内容で、支援が完了しました。</p>
		<!--  支援情報  -->
		<table class="table">
			<tbody>
				<tr>
					<thead class="thead-light">
						<th scope="row">支援額</th>
						<td>{{$reward->rw_price}}</td>
						</tr>
				<tr>
					<th scope="row">リターン内容</th>
					<td>{{$reward->rw_body}}</td>
				</tr>
				<tr>
					<th scope="row">予定配送時期</th>
					<td>{{$reward->rw_season}}</td>
				</tr>
			</tbody>
		</table>
		<p>確認内容をご登録のメールアドレスに送信しました。</p>
		<p>リターン発送までしばらくお待ちください。</p>
	</div>
</div>

@endsection
