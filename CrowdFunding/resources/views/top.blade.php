@extends('layouts.layout')
@section('content')
	<div class="top_bannner"></div>
	<div class="input-group position-absolute top_search">
		<!-- <input type="text" class="form-control rounded-0" placeholder="プロジェクトを検索" aria-label="Recipient's username" aria-describedby="button-addon2">
		<div class="col-md-9">
			<button class="btn btn-primary rounded-0" type="button" id="button-addon2">検索</button>
		</div> -->
	</div>
		<div class="block_col">
			<h2 class="block_title">PROJECTS</h2>
			<span class="sub_title">プロジェクト一覧</span>
		</div>
		@foreach($projects as  $project)
		<div class="project_card">
			<div class="project_card-image">
				<a target="_brank" href="">
					<img class="attachment project image overwhite" src="storage/{{ $reward->rw_image }}">
				</a>
			</div>
			<div class="project_card-name">
				<a target="_brank" href="#">#</a>
			</div>
			<div class="project_card-container">
				<div class="project_card-content">
					<div class="project_card-title">
						<a target="_brank" href="">{{ $projects->pj_title }}</a>
					</div>
					<div class="project_card-description">
					</div>
				</div>
				<div class="project_card-progress">
					<div class="project_card-amount">
						number_format({{$total_amount}})
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="{{ $percent_complete }}" aria-valuemin="0" aria-valuemax="100">{{ $percent_complete }}%</div>
					</div>
				</div>
				<div class="project_card-progress_info">
					<i class="fas fa-users"></i>
						{{$supporter_list}}人が支援
					<i class="far fa-clock"></i>
						残り{{$period}}日
					</div>
				</div>
			</div>
		@endforeach
@endsection
@include('footer')
