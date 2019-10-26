@extends('master')
@section('content')
	<h1 class="card-header">ALL POSTS</h1>
	@foreach($posts as $post)
	<div class="card">
	<div class="card-body mt-5">
		<div class="card border-top border-bottom text-muted">
		<h2>
			<a href="{{route('posts.show',$post->id)}}">
				{{$post->title}}
			</a></br>
			<div>
		
			<form onsubmit="return confirm('Are you sure you want to delete this post');" method="post" action="{{route('posts.destroy',$post->id)}}">
						
			<a href="{{route('posts.edit',$post->id)}}" class="btn btn-info">
				Edit	
			</a>

				@csrf
				@method('delete')<button type="submit" class="btn btn-danger">
					Delete
				</button>
			</div>
				
			</form>
		</h2>			
		</div>
		</div>
	</div>
	@endforeach
	{{$posts->links()}}
	@endsection
