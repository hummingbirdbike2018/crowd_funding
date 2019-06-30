@extends('layouts.layout')

@section('content')

<div class="col-md-7">
	<div class="container">
		<h3 class="py-3" id="pj_title">{{ $project->pj_title }}</h3>
		<div class="shadow-sm p-3 mb-5 bg-white rounded">
			<p class="py-3 mx-auto" id="selected_reward">リターンを選択してください</p>
		@for($i = 0; $i < count($rewards); $i++)
			<div class="reward_container">
				<a href="{{ $rewards[$i]->id }}">
				<table class="table" style="width:100%">
					<tr>
						<div class="reward_header">
							<td>¥ {{ number_format($rewards[$i]->rw_price) }}</td>
						</div>
						<div class="reward_body">
							<td>
								<p>{{ $rewards[$i]->rw_body }}
								<p>予定配送時期 {{ $rewards[$i]->rw_season }}
								<p>{{  $supporter_list[$i] }} 人が支援
								<br>残り {{ $stock_list[$i] }} 個
							</td>
						</div>
					</tr>
				</table>
				</a>
			</div>
			@endfor
		</div>
	</div>
</div>
@endsection

@include('footer')
