@extends('layouts.layout')

@section('content')

<div class="col-md-7">
	<div class="container">
		<h3 class="py-3" id="pj_title">{{ $project->pj_title }}</h3>
		<div class="shadow-sm p-3 mb-5 bg-white rounded">
			<p class="py-3 mx-auto" id="selected_reward">リターンを選択してください</p>
			@foreach($rewards as $reward)
			<div class="reward_container">
				<a href="{{ $reward->id }}">
				<table class="table" style="width:100%">
					<tr>
						<div class="reward_header">
							<td>¥ {{ number_format($reward->rw_price) }}</td>
						</div>
						<div class="reward_body">
							<td>
								<p>{{ $reward->rw_body }}
								<p>{{ $supporter }} 人が支援
								<br>残り {{ $stock }} 個
							</td>
						</div>
					</tr>
				</table>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection

@include('footer')
