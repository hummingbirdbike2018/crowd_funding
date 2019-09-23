@extends(projects.project_description)

@section('comment')

@foreach($users as $user)
		 <div class="container">
			 <div class="comment">
				 <div class="comment-user">
					 <img class="attachment user image comment-image fallback" src="../../storage/app/storage/user_img/user_{{ $user->id }}/{{ $user->user_img }}" alt="user_image">
					 <div class="comment-screen_name">
						 {{$user->display}}
					 </div>
				 </div>
				 <div class="comment-container">
					 <div class="comment-content">
						 {{$user->comment}}
					 </div>
					 <div class="comment-created_at">
						 {{$user->created_at}}
					 </div>
				 </div>
			 </div>
			 <nav aria-label="...">
				 <!-- ページネーション -->
				 <ul class="pagination">
					 <li class="page-item disabled">
						 <a class="page-link" href="#" tabindex="-1">戻る</a>
					 </li>
					 <li class="page-item"><a class="page-link" href="#">1</a></li>
					 <li class="page-item active">
						 <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
					 </li>
					 <li class="page-item"><a class="page-link" href="#">3</a></li>
					 <li class="page-item">
						 <a class="page-link" href="#">次へ</a>
					 </li>
				 </ul>
			 </nav>
		 </div>
@endforeach

@endsection
