@extends('layouts.layout')
@section('content')
	<div class="top_bannner mb-5">
		<div class="cover-text">
			<h2>繋がる・叶える、資金集めを始めよう！</h2>
			<h5>　　　　クラウドファンディングプラットフォーム</h5>
		</div>
		<div class="cover-btn">
			@guest
			<a class="btn cover_btn_1" href="#Register" data-toggle="modal" data-target="#RegisterModal">さっそく始める</a>
			<a class="btn cover_btn_2" href="#Login" data-toggle="modal" data-target="#LoginModal">登録済みの方はこちら</a>
			@else
			<form class="form-inline search-form">
				<input type="search" class="form-control search-bar mr-2" placeholder="プロジェクトを検索" aria-label="検索...">
				<button type="submit" class="btn search-btn btn-primary">検索</button>
			 </form>
			@endguest
		</div>
	</div>
	<div class="container">
		<div class="block_col">
			<h2 class="block_title">PROJECTS<span class="sub_title">プロジェクト一覧</span></h2>
		</div>
		<div class="cbox">
		@foreach($projects as $key => $project)
			<div class="cbox-inner d-flex">
				<div class="shadow-sm mb-5 bg-white rounded">
					<div class="project_image">
						<img class="pj_img" src="../storage/product_img/project_{{$project->id}}/{{$project->product_img_1}}">
					</div>
					<div class="project_detail p-3">
						<h5 class="card-title mt-3">{!! nl2br(e( $project->pj_title )) !!}</h5>
						<div class="card_planner_info"><i class="fa fa-user"></i>{{$planner_list[$key]}}</div>
						<div class="card_progress">
							<div class="card_total_amount">￥ {{number_format($total_amounts[$key])}}</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{$percent_completes[$key]}}" aria-valuemin="0"
									aria-valuemax="100" style="width:{{$percent_completes[$key]}}%">
									{{$percent_completes[$key]}}%
								</div>
							</div>
							<div class="card_progress_info">
								<i class="fa fa-users"></i> {{$supporters[$key]}} 人が支援　
								<i class="fa fa-clock"></i> あと {{$period[$key]}} 日
							</div>
						</div>
					</div>
				</div>
				<a href="./projects/{{$project->id}}"></a>
			</div>
		@endforeach
		</div>
		<!-- 新着プロジェクト一覧 -->
		<div class="block_col mt-5">
			<h2 class="block_title">NEW PROJECT<span class="sub_title">新着プロジェクト</span></h2>
		</div>
		<div class="cbox">
		@foreach($new_projects as $key => $project)
			<div class="cbox-inner d-flex">
				<div class="shadow-sm mb-5 bg-white rounded">
					<div class="project-successs-bar">
						<img class="pj_img" src="../storage/product_img/project_{{$project->id}}/{{$project->product_img_1}}">
					</div>
					<div class="project_detail p-3">
						<h5 class="card-title mt-3">{!! nl2br(e( $project->pj_title )) !!}</h5>
						@foreach($new_planner as $planner)
						<div class="card_planner_info"><i class="fa fa-user"></i>{{$planner->name}}</div>
						@endforeach
						<div class="card_progress">
							<div class="card_total_amount">￥ {{number_format($new_total_amounts[$key])}}</div>
							<div class="progress">
								<div class="progress-bar progress-bar bg-warning"
									role="progressbar" aria-valuenow="{{$new_percent_completes[$key]}}" aria-valuemin="0"
									aria-valuemax="100" style="width:{{$new_percent_completes[$key]}}%">{{$new_percent_completes[$key]}}%
								</div>
							</div>
							<div class="card_progress_info">
								<i class="fa fa-users"></i> {{$new_supporters[$key]}} 人が支援　
								<i class="fa fa-clock"></i> あと {{$new_period[$key]}} 日
							</div>
						</div>
					</div>
				</div>
				<a href="./projects/{{$project->id}}"></a>
			</div>
		@endforeach
		</div>
	</div>
@endsection
@include('footer')
