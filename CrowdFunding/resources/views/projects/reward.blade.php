@extends('layouts.layout')

@section('reward')

@foreach($rewards as $reward)
	<div class="card" style="width: 18rem;">
		<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
			<title>{{ $reward->rw_image }}</title>
			<rect fill="#868e96" width="100%" height="100%"/>
			<text fill="#dee2e6" dy=".3em" x="50%" y="50%"></text>
		</svg>
		<div class="card-body">
			<h5 class="card-title">{{ $reward->rw_title }}</h5>
			<p class="card-text">¥{{ $reward->rw_price }}</p>
			<p class="card-text">{{ $reward->rw_body }}</p>
			<span class="card-text">予定配送時期：{{ $reward->rw_season }}</span>
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td class="supporter"> {{ $support }}人が支援</td>
						<td class="quantity">残り{{ $r_quantity }}個</td>
					</tr>
				</tbody>
			</table>
			<a href="" class="btn btn-primary">支援する</a>
		</div>
	</div>
@endforeach

@endsection
