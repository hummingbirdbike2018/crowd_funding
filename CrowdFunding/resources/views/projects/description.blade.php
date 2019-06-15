@extends('layout')



@section('content')
<div class="product-container bg-light">
	<div class="container">
		<div class="heading-container">
				<h3 class="py-3">ここにプロジェクト名、キャッチコピーを表示</h3>
		</div>
		<div class="main-container">
			<div class="row">
				<div class="col col-md-2 btn-group-vertical">
					<div class="shadow-sm p-3 mb-5 bg-white rounded">
						<button type="button" class="btn btn-primary my-3">facebookでシェア</button>
						<button type="button" class="btn btn-success my-3">Twitterでシェア</button>
						<div class="border"></div>
						<button type="button" class="btn btn-danger mt-5">支援する</button>
					</div>
				</div>
			<div class="col-md-6">
				<div class="shadow-sm p-3 mb-5 bg-white rounded">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ホーム</a>
							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">活動報告</a>
							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">コメント</a>
						</div>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								{{ 'product_img_1' }}<p>
								{{ 'product_detail_1' }}<p>
								{{ 'product_img_2' }}<p>
								{{ 'product_detail_2' }}<p>
								{{ 'product_img_3' }}<p>
								{{ 'product_detail_3' }}<p>
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							</div>
							<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							</div>
						</div>
					</nav>
				</div>
			</div>
			<div class="col col-md-4">
				<div class="shadow-sm p-3 mb-5 bg-white rounded w-75">
					<div class="text text-muted text-small">現在の支援総額</div>
					<strong>
						<span class="text-warning display-4v project-status">¥{{ 'total_amount' }}</span>
					</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
					</div>
					<div class="text-muted text-small">目標金額 ¥{{ 'target_amount' }}</div>
					<div class="border"></div>
					<table class="table table-borderless">
						<thead>
							<tr>
								<th scope="col">
									<i class="fas fa-users"> 支援者数</i>
								</th>
								<th scope="col">
									<i class="far fa-clock"> 残り期間</i>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="project-supporter">{{ 'total_supporter' }} 人</td>
								<td class="project-period">{{ 'period' }} 日</td>
							</tr>
						</tbody>
					</table>
					<button type="button" class="btn btn-primary">このプロジェクトを支援する</button><p>
					<small>2019/07/31 23:59 までに目標金額に達すると、プロジェクトが成立となり、決済が完了します。</small>
				</div>
			</div>
			</div>
		</div>

</div>
</div>
@endsection

@include('footer')
