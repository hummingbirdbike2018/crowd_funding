@section('content')

<section class="section">
	<div class="block_col">
		<h2 class="block_title">PROJECTS</h2>
		<span class="sub_title">プロジェクト一覧</span>
	</div>
	<div class="project_card">
		<div class="project_card-image">
			<a target="_brank" href="">
				<img class="attachment project image overwhite" src="">
			</a>
		</div>
		<div class="project_card-name">
			<a target="_brank" href="/{{$planner_name}}">{{$planner_name}}</a>
		</div>
		<div class="project_card-container">
			<div class="project_card-content">
				<div class="project_card-title">
					<a target="_brank" href="">{{$projects->pj_title}}}</a>
				</div>
				<div class="project_card-description">
				</div>
			</div>
			<div class="project_card-progress">
				<div class="project_card-amount">
					\number_format({{$total_amount}})
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="{{$percent_complete}}" aria-valuemin="0" aria-valuemax="100">{{$percent_complete}}%</div>
				</div>
			</div>
			<div class="project_card-progress_info">
				<i class="fas fa-users"></i>
					{{$supporter_list[i]}}人が支援
				<i class="far fa-clock"></i>
					残り{{$period}}日
				</div>
			</div>
		</div>
	<span class="project_card-ribbon is-success"></span>
</section>

@endsection
