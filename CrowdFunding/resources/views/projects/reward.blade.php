@extends('layouts.layout')

@section('projects.reward')

@foreach($rewards as $reward)
<div class="shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;">
	<h5 class="card-title">{{ $reward->rw_title }}</h5>
	<p class="card-text">¥ {{ number_format($reward->rw_price) }}</p>
	<p class="card-text">限定 {{ $reward->rw_quantity }}個</p>
	<img src="../storage/{{$reward->rw_image }}"><br>
	<p class="card-text">{{ $reward->rw_body }}</p>
	<span class="card-text">予定配送時期：{{ $reward->rw_season }}</span>
		<table class="table table-borderless">
			<tbody>
				<tr>
					@for($i=0; $i < $get_reward; $i++)
					<td class="supporter">{{ $supporter }} 人が支援</td>
					<td class="quantity">残り {{ $stock - $i }} 個</td>
					@endfor
				</tr>
			</tbody>
		</table>
	<a href="#" class="btn btn-primary">支援する</a>
</div>
@endforeach

@endsection
