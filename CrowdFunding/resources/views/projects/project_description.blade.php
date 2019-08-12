@extends('layouts.layout')
@section('content')

<div class="container bg-light">
	<div class="heading-container">
		<h4 class="py-3 text-center" id="pj_title">{!! nl2br(e( $project->pj_title )) !!}</h4>
	</div>
	<div class="row">
		<div class="col col-md-7">
			<div class="shadow-sm p-3 mb-5 bg-white rounded">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ホーム</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">活動報告</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">コメント</a>
					</div>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<img class="mb-2" src="../../storage/product_img/project_{{$project->id}}/{{$project->product_img_1}}"><br>
							{{ $project->product_detail_1 }}<br>
							<img class="my-4" src="../../storage/product_img/project_{{$project->id}}/{{$project->product_img_2}}"><br>
							{{ $project->product_detail_2 }}<br>
							<img class="my-4" src="../../storage/product_img/project_{{$project->id}}/{{$project->product_img_3}}"><br>
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
		<div class="col col-md-5">
			<div class="shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;">
				<div class="text text-muted">現在の支援総額</div>
				<strong>
					<span class="text-black display-4v total_amount">¥{{ number_format($total_amount) }}</span>
				</strong>
				<div class="progress">
					<div class="progress-bar progress-bar bg-warning" role="progressbar" aria-valuenow="{{ $percent_complete }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $percent_complete }}%">{{ $percent_complete }}%</div>
				</div>
				<div class="text-muted">目標金額 ¥{{ number_format($project->target_amount) }}</div>
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
							<td class="project-supporter">{{ array_sum($supporter_list) }} 人</td>
							<td class="project-period">{{ $period }} 日</td>
						</tr>
					</tbody>
				</table>
				<a href="{{ $project->id.'/supports/select' }}"  class="btn btn-primary">このプロジェクトを支援する</a><p>
				<small>{{ $end_time }} までに目標金額に達すると、プロジェクトが成立となり、決済が完了します。</small>
			</div>
			@for($i = 0; $i < count($rewards); $i++)
				<div class="shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;">
					<h4 class="card-title">{!! nl2br(e( $rewards[$i]->rw_title )) !!}</h4>
					<p class="card-text rw_price">¥ {{ number_format($rewards[$i]->rw_price) }}</p>
					<p class="card-text quantity">限定 {{ $rewards[$i]->rw_quantity }}個</p>
					<img src="../../storage/product_img/project_{{$project->id}}/{{$rewards[$i]->rw_image }}"><br>
					<p class="card-text mt-2">{!! nl2br(e( $rewards[$i]->rw_body )) !!}</p>
					<span class="card-text">予定配送時期：{!! nl2br(e( $rewards[$i]->rw_season )) !!}</span>
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td class="supporter">{{ $supporter_list[$i] }} 人が支援</td>
								<td class="stock">残り {{ $stock_list[$i] }} 個</td>
							</tr>
						</tbody>
					</table>
					@if($stock_list[$i] != 0)
						<a href="{{ $project->id.'/supports/'.$rewards[$i]->id }}" class="btn btn-primary">支援する</a>
					@else
						<a href="#" class="btn btn-primary disabled">SOLD OUT</a>
					@endif
				</div>
			@endfor
		</div>
	</div>
</div>
@endsection
@include('footer')
