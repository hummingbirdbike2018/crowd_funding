@extends('layouts.layout')
@section('planner_info')
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
@endsection
