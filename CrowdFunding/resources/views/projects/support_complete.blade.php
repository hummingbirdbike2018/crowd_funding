@extends('layouts.layout')

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
						<td class="w-75 selected-reward-price">{{$rw_price}}</td>
						</tr>
				<tr>
					<th scope="row">リターン内容</th>
					<td class="w-75">{{$rw_body}}</td>
				</tr>
			</tbody>
		</table>
		<div class="message">
		<p>確認内容をご登録のメールアドレスに送信しました。</p>
		<small>※目標金額に達しない場合は、プロジェクト不成立となりカードの決済は行われません。<br>
			また、リターンの発送も行われませんので、ご注意ください。</small>
	</div>
</div>
</div>

@endsection

@include('footer')
