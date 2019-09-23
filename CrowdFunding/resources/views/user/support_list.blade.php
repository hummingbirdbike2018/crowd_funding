@extends('layouts.layout')
@section('content')

<div class= "container">
	@for($i = 0; $i < count($support_list); $i++)
	<div class= "edit_user show_support_list mx-auto border mb-5 p-4  bg-light">
		@if($support_list == NULL)
		まだ支援したプロジェクトはありません。<p>
		@endif
		<div class="cbox">
			<div class="cbox-inner w-100">
				<div class="row">
					<div class="col-md-5">
						<div class="project-title text-center">
							<h5>{!! nl2br(e( $support_list[$i]->pj_title )) !!}</h5>
						</div>
						<div class="project-image">
							<img class="pj_img" src="../../../storage/product_img/project_{{$support_list[$i]->pj_id}}/{{ $support_list[$i]->product_img_1 }}">
							<span>クリックするとプロジェクト紹介ページに遷移します。</span>
						</div>
					</div>
					<div class="col-md-7">
						<div class="support-info text-center">
							<h5>支援情報</h5>
							<table class="table table-striped">
								<tr>
									<th>リターン名</th>
									<td class="w-75">{{ $support_list[$i]->rw_title }}</td>
								</tr>
								<tr>
									<th>リターン内容</th>
									<td>{{ $support_list[$i]->rw_body }}</td>
								</tr>
								<tr>
									<th>配送時期</th>
									<td>{{ $support_list[$i]->rw_season }}</td>
								</tr>
								<tr>
									<th>価格</th>
									<td>{{ number_format($support_list[$i]->rw_price) }} 円</td>
								</tr>
								<tr>
									<th>配送先住所</th>
									<td>
										〒{{ $support_list[$i]->post_code }}<br>
										{{ $support_list[$i]->address }}<br>
										{{ $support_list[$i]->building }}<br>
										TEL:{{ $support_list[$i]->tel }}<br>
										{{ $support_list[$i]->name }}
									</td>
								</tr>
								<tr>
									<th>決済情報</th>
									<td>
										カード番号: {{ $card_no[$i] }}<br>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<a href="../../projects/{{$support_list[$i]->pj_id}}"></a>
				</div>
			</div>
		</div>
	</div>
	@endfor
</div>

@endsection
@include('footer')
