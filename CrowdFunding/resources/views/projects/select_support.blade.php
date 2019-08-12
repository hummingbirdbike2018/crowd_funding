@extends('layouts.layout')

@section('content')
<div class="container bg-light">
	<div class="heading-container">
		<h4 class="py-3 text-center" id="pj_title">{!! nl2br(e( $project->pj_title )) !!}</h4>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="shadow-sm p-3 mb-5 bg-white rounded">
				<p class="py-3 text-center" id="selected_reward">リターンを選択してください</p>
			@for($i = 0; $i < count($rewards); $i++)
				<div class="select-reward">
					<table class="table" style="width:100%">
						<tr>
							<div class="reward_header">
								<td>
									<p class="rw_price mx-5">¥{{ number_format($rewards[$i]->rw_price) }}
								</td>
							</div>
							<div class="reward_body">
								<td>
									<p>{{ $rewards[$i]->rw_body }}
									<p class="supporter">{{  $supporter_list[$i] }} 人が支援
									<p class="stock">残り {{ $stock_list[$i] }} 個
								</td>
							</div>
						</tr>
					</table>
					<a href="{{ $rewards[$i]->id }}"></a>
				</div>
				@endfor
			</div>
		</div>
		<div class="col col-md-5">
			<div class="shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;">
				<div class="text text-muted">現在の支援総額</div>
				<strong>
					<span class="total_amount">¥{{ number_format($total_amount) }}</span>
				</strong>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="{{ $percent_complete }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $percent_complete }}%">{{ $percent_complete }}%</div>
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
			</div>
		</div>
	</div>
</div>
@endsection
@include('footer')
