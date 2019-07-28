@extends('layouts.layout')
@section('content')
	<div class="top_bannner"></div>
	<div class="block_col">
		<h2 class="block_title">PROJECTS<span class="sub_title">プロジェクト一覧</span></h2>
	</div>
	<div class="container">
		<div class="cbox">
			@for ($i = 1; $i <= 8; $i++)
				<div class="cbox-inner">
					<div class="shadow-sm p-3 mb-5 bg-white rounded">
						<h5 class="card-title">テストタイトル{{$i}}</h5>
						<div>
							<img src="../storage/sample/sample_{{$i}}.jpg" style="width:240px; height:180px;">
						</div>
						<p class="card-text">テスト説明文テスト説明文テスト説明文テスト説明文</p>
						<p class="card-text">支援合計金額を表示</p>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
								role="progressbar" aria-valuenow="100" aria-valuemin="0"
								aria-valuemax="100" style="width: 100%">100%
							</div>
						</div>
						<div class="project_card-progress_info">
							<i class="fa fa-users"></i> 10 人が支援
							<i class="fa fa-clock"></i> あと 90 日
						</div>
					</div>
				</div>
			@endfor
		</div>
	</div>
@endsection
@include('footer')
