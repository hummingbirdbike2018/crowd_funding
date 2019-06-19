@extends('layouts.layout')



@section('content')
<div class="product-container bg-light">
	<div class="container">
		@foreach($projects as $project)
		<div class="heading-container">
			<h3 class="py-3 mx-auto" id="pj_title">{{ $project->pj_title }}</h3>
		</div>
		<div class="main-container">
			<div class="row">
				<!-- <div class="col col-md-2 btn-group-vertical">
					<div class="shadow-sm p-3 mb-5 bg-white rounded">
						<button type="button" class="btn btn-primary my-3">facebookでシェア</button>
						<button type="button" class="btn btn-success my-3">Twitterでシェア</button>
						<div class="border"></div>
						<button type="button" class="btn btn-danger mt-5">支援する</button>
					</div>
				</div> -->
			<div class="col-md-7">
				<div class="shadow-sm p-3 mb-5 bg-white rounded">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ホーム</a>
							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">活動報告</a>
							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">コメント</a>
						</div>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<img src="../storage/{{$project->product_img_1 }}"><br>
								{{ $project->product_detail_1 }}<br>
								<img src="../storage/{{$project->product_img_2}}"><br>
								{{ $project->product_detail_2 }}<br>
								<img src="../storage/{{$project->product_img_3}}"><br>
								{{ $project->product_detail_3 }}<br>
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
				<div class="shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
					<div class="text text-muted text-small">現在の支援総額</div>
					<strong>
						<span class="text-warning display-4v project-status">¥{{ $total_amount }}</span>
					</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="{{ $percent_complete }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $percent_complete }}%">{{ $percent_complete }}%</div>
					</div>
					<div class="text-muted text-small">目標金額 ¥{{ $project->target_amount }}</div>
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
								<td class="project-supporter">{{ $total_supporter }} 人</td>
								<td class="project-period">{{ $period }} 日</td>
							</tr>
						</tbody>
					</table>
					<button type="button" class="btn btn-primary">このプロジェクトを支援する</button><p>
					<small>{{ $end_time }} までに目標金額に達すると、プロジェクトが成立となり、決済が完了します。</small>
				</div>
			@foreach($rewards as $reward)
				<div class="card" style="width: 18rem;">
					<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
						<title>{{ $reward->rw_image }}</title>
						<rect fill="#868e96" width="100%" height="100%"/>
						<text fill="#dee2e6" dy=".3em" x="50%" y="50%"></text>
					</svg>
					<div class="card-body">
						<h5 class="card-title">{{ $reward->rw-title }}</h5>
						<p class="card-text">{{ $reward->rw-price }}</p>
						<p class="card-text">{{ $reward->rw-body }}</p>
						<span class="card-text">予定配送時期：{{ $reward->rw-season }}</span>
						<table class="table table-borderless">
							<tbody>
								<tr>
									<td class="supporter">{{ $supporter }} 人が支援</td>
									<td class="quantity">残り {{ $period }} 個</td>
								</tr>
							</tbody>
						</table>
						<a href="{{ route('') }}" class="btn btn-primary">支援する</a>
					</div>
			@endforeach
				</div>
			</div>
			</div>
		</div>
		@endforeach
</div>
</div>
@endsection

@include('footer')
