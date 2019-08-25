@extends('layouts.layout')

@section('content')

<div class="container">
	<div class="shadow-sm p-3 mb-5 bg-white rounded">
		<p class="font-weight-light">決済情報を入力してください。</p>
		<!--  支援情報  -->
		<form action="complete" method="POST">
			<table class="table">
				<tbody>
					<tr>
						<thead class="thead-light">
							<th scope="row">支援額</th>
							<td>¥ {{ number_format($request->rw_price) }}</td>
					</tr>
					<tr>
						<th scope="row">リターン内容</th>
						<td>{{$request->rw_body}}</td>
					</tr>
					<tr>
						<th scope="row"></th>
						<td>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
								<label class="form-check-label" for="inlineRadio1">登録済みカードで決済</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								<label class="form-check-label" for="inlineRadio2">カード番号を入力</label>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">カード選択</th>
						<td>
							<div class="form-group">
								<select class="custom-select rounded-0">
									@foreach($payments as $payment)
									<option value="1">{{$payment->card_no}}</option>
									@endforeach
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">カード番号</th>
						<td>
							<small>半角英数でご入力ください。</small>
							<div class="form-group">
								<input type="text" name="card_no" class="form-control rounded-0" placeholder="●●●● ●●●● ●●●● ●●●●">
							</div>
							<p></p>
						</td>
					</tr>
					<tr>
						<th scope="row">有効期限</th>
						<td>
							<div class="form-group row">
								<div class="col">
									<input type="text" name="exp_mon" class="form-control rounded-0" placeholder="MM">
								</div>/
								<div class="col">
									<input type="text" name="exp_year" class="form-control rounded-0" placeholder="YY">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">セキュリティ番号</th>
						<td>
							<div class="form-group">
								<input type="text" name="card_csv" class="form-control rounded-0" placeholder="例：123">
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">カード名義</th>
						<td>
							<div class="form-group row">
								<div class="col">
									<input type="text" name="first_name" class="form-control rounded-0" placeholder="例：TARO">
								</div>/
								<div class="col">
									<input type="text" name="last_name" class="form-control rounded-0" placeholder="例：YAMADA">
								</div>
							</div>
							<label><input type="checkbox" name="card_check">カード情報を保存する</label>
						</td>
					</tr>
				</tbody>
			</table>
			@csrf
			<button type="submit" name="action" class="btn btn-danger rounded-0 mx-auto" value="pay">決済する</button>
		</form>
	</div>
</div>

@endsection
