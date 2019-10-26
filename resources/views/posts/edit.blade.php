@extends('master')
@section('content')
<h2 class="mt-3">
	Add a post
</h2>
@if($errors->all())
<div class="alert alert-danger">
@foreach($errors->all() as $error)
	
	<li>
		{{$error}}
	</li>
	@endforeach

</div>
@endif

@if (session()->has('message'))
	<div class="alert alert-success">
		{{session()->get('message')}}
	</div>
	@endif
<form action="{{route('posts.update',$post->id)}}" method="post">
@csrf
@method('put')
	<div class="form-group">
		<label for="title" >
		Title</label>
		<input type="text" value='{{$post->title}}' name="title" id="title" class="form-control">
	</div>
	<div class="form-group">
		<label for="content">
			content
		</label>
		<textarea name="content" id="content" cols="30" rows="10" class="form-control noresize">
			{{$post->content}}
		</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary" >
				Update the post
			</button>
		</div>
	</form>
	</div>
			

		
	</div>
	
</form>
@endsection

