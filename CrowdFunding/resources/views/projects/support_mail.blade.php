<!DOCTYPE html>
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- script -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="shadow-sm p-3 mb-5 bg-white rounded">
			<p class="font-weight-light text-center">以下の内容で支援を承りました。</p>
			<table class="table">
				<tbody>
					<tr>
						<thead class="thead-light" >
							<th scope="row">リターン内容</th>

							<td class="w-75">{{ $rw_body }}</td>
					</tr>
					<tr>
						<th scope="row">支援額</th>
						<td class="w-75">{{ $rw_price }}</td>
					</tr>
					<tr>
						<th scope="row" >コメント</th>
						<td class="w-75">{{ $comment }}</td>
					</tr>
					<tr>
						<th scope="row" >決済方法</th>
						<td class="w-75">クレジットカード</td>
					</tr>
					<tr>
						<th scope="row" >ご利用カード番号</th>
						<td class="w-75">{{ $card_no }}</td>

					</tr>
				</tbody>
			</table>
			<p class="text-center">それではプロジェクト終了までお待ちください。</p>
			<small>※目標金額に達しない場合は、プロジェクト不成立となりカードの決済は行われません。<br>
				また、リターンの発送も行われませんので、ご注意ください。</small>
		</div>
	</div>
</body>
</html>
