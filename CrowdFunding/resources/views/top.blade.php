@extends('layouts.layout')
@section('content')
	<!-- <div class="top_bannner"></div> -->
	<div class="block_col">
		<h2 class="block_title">PROJECTS<span class="sub_title">プロジェクト一覧</span></h2>
	</div>
	<div class="container">
		<div class="cbox">
			@foreach($projects as $key => $project)
				<div class="cbox-inner">
					<div class="shadow-sm p-3 mb-5 bg-white rounded">
						<img src="../storage/product_img/project_{{$project->id}}/{{$project->product_img_1}}">
						<div class="card-title">{{$project->pj_title}}</div>
						<div class="card_planner_info"><i class="fa fa-user"></i>{{$planner_list[$key]}}</div>
						<div class="card_total_amount">￥ {{number_format($total_amounts[$key])}}</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
								role="progressbar" aria-valuenow="{{$percent_completes[$key]}}" aria-valuemin="0"
								aria-valuemax="100" style="width:{{$percent_completes[$key]}}%">{{$percent_completes[$key]}}%
							</div>
						</div>
						<div class="card_progress_info">
							<i class="fa fa-users"></i> {{$supporters[$key]}} 人が支援　
							<i class="fa fa-clock"></i> あと {{$period[$key]}} 日
						</div>
					</div>
					<a href="./projects/{{$project->id}}"></a>
				</div>
			@endforeach
		</div>
	</div>
@endsection
@include('footer')
