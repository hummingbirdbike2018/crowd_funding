@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('メールアドレス変更の確認') }}</div>
					<div class="card-body">
						こんにちは、crowdfundingです。
						<br>
						本メールはメールアドレス変更確認のメールです。
						<br>
						下記のURLをクリックしてメールアドレス変更の本人確認を完了させてください。<br>
						{{url('user/email_confirmation/'.$token)}}
				</div>
		</div>
	</div>
</div>
@endsection
