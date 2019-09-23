@extends('layouts.layout')
@section('content')
<div class="container">
	<div class="heading-container">
		<h4 class="py-3 text-center" id="pj_title">{!! nl2br(e( $project->pj_title )) !!}</h4>
	</div>
	<div class="row">
		<div class="col col-md-7">
			<div class="tab-menu">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<!-- ホームタブ -->
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ホーム</a>
						<!-- 活動報告タブ -->
						@if(count($reports) == 0)
						<a class="nav-item nav-link disabled" id="nav-report-tab" data-toggle="tab" href="#nav-report" role="tab" aria-controls="nav-report" aria-selected="false">活動報告</a>
						@else
						<a class="nav-item nav-link" id="nav-report-tab" data-toggle="tab" href="#nav-report" role="tab" aria-controls="nav-report" aria-selected="false">活動報告
						<span class="badge badge-pill badge-primary text-light">{{ count($reports) }}</span></a>
						@endif
						<!-- コメントタブ -->
						@if(count($users) == 0)
						<a class="nav-item nav-link disabled" id="nav-comment-tab" data-toggle="tab" href="#" role="tab" aria-controls="nav-comment" aria-selected="false">コメント</a>
						@else
						<a class="nav-item nav-link" id="nav-comment-tab" data-toggle="tab" href="#nav-comment" role="tab" aria-controls="nav-comment" aria-selected="false">コメント
						<span class="badge badge-pill badge-primary text-light">{{ count($users) }}</span></a>
						@endif
					</div>
					<div class="shadow p-3 mb-5 bg-white rounded">
						<!-- プロジェクト説明 -->
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<img class="mb-2" src="../../storage/product_img/project_{{$project->id}}/{{$project->product_img_1}}"><br>
								{{ $project->product_detail_1 }}<br>
								<img class="my-4" src="../../storage/product_img/project_{{$project->id}}/{{$project->product_img_2}}"><br>
								{{ $project->product_detail_2 }}<br>
								<img class="my-4" src="../../storage/product_img/project_{{$project->id}}/{{$project->product_img_3}}"><br>
								{{ $project->product_detail_3 }}<br>
							</div>
							<!-- 活動報告 -->
							@foreach($reports as $report)
							<div class="tab-pane fade" id="nav-report" role="tabpanel" aria-labelledby="nav-report-tab">
								<div class="container">
									<div class="card">
										<h5 class="card-header report_title">{{ $report->report_title }}</h5>
										<div class="card-body">
											<div class="card-text">
												{!! nl2br(e( $report->report_text_1 )) !!}
												<img class="report-img_1 disabled" src="../../storage/planner_img/planner_{{ $report->planner_id }}/report_{{ $report->id }}/{{ $report->report_img_1 }}">
												{{ $report->created_at }}
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<!-- コメント -->
							<div class="tab-pane fade" id="nav-comment" role="tabpanel" aria-labelledby="nav-comment-tab">
								<div class="comment_container border bg-light p-2">
								@foreach($users as $user)
									<div class="row">
										<div class="comment-user col-md-2">
											@if($user->user_img != NULL)
											<img class="user_image" src="../../storage/app/storage/user_img/user_{{ $user->user_id }}/{{ $user->user_img }}" alt="user_image">
											@else
											<img class="default_user_image" src="../../storage/app/storage/user_img/default/user_default_img.png" alt="default_user_image">
											@endif
											<div class="comment-screen_name">
												{{$user->display}}
											</div>
										</div>
										<div class="comment-status col-md-10">
											<div class="card my-2">
												<div class="card-body">
													<div class="comment-content pb-2">
														{!! nl2br(e( $user->comment )) !!}
													</div>
													<div class="comment-created_at">
														{{$user->created_at}}
													</div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="col col-md-5">
			<div class="shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;">
				<!-- 達成率表示 -->
				<div class="text text-muted">現在の支援総額</div>
				<strong>
					<span class="text-black display-4v total_amount">¥{{ number_format($total_amount) }}</span>
				</strong>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{$percent_complete}}" aria-valuemin="0"
						aria-valuemax="100" style="width:{{$percent_complete}}%">
						{{$percent_complete}}%
					</div>
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
			<!-- 起案者情報 -->
			<div class="planner_info shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;">
				<div class="row">
					<div class="col-md-3">
						<div class="planner_img">
							<img src="../../storage/planner_img/planner_{{ $planner->id }}/{{ $planner->planner_img }}"></div>
					</div>
					<div class="col-md-9">
						<div class="planner_name mb-2">
							{{ $planner->name }}
						</div>
						<div class="planner_intro">
							{{ $planner->intro }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="planner_sns">
							<!-- <a href="{{ $planner->facebook }}" class="button btn-facebook btn-sm"><i class="fab fa-facebook-square"></i></a>
							<a href="{{ $planner->twitter }}" class="button btn-twitter btn-sm"><i class="fab fa-twitter-square"></i></a>
							<a href="{{ $planner->instagram }}" class="button btn-instagram btn-sm"><i class="fab fa-instagram"></i></a>
							<a href="{{ $planner->web_site }}" class="button btn-web btn-sm"><i class="fas fa-globe-asia"></i></a> -->
						</div>
					</div>
					<div class="col-md-9">
						<div class="planner_btn">
							<a href="planner_profile/{{ $planner->id }}" class="btn btn-secondary btn-sm my-2" role="button" aria-pressed="true">プロフィールを見る</a>
							<a href="contact_planner/{{ $planner->id }}" class="btn btn-success btn-sm" role="button" aria-pressed="true">お問い合わせ</a>
						</div>
					</div>
				</div>
			</div>
			<!-- リターンリスト -->
			@for($i = 0; $i < count($rewards); $i++)
			<div class="shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;">
				<h4 class="reward-card-title">{!! nl2br(e( $rewards[$i]->rw_title )) !!}</h4>
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
