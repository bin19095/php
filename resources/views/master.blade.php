<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="bg-info text-white p-5">
		<a href="{{route('posts.index')}}" class="btn btn-secondary">Home</a>
		<a href="{{route('posts.create')}}" class="btn btn-secondary">Create Post</a>
		@auth
		<form  class="d-inline-block float-right" action="{{route('logout')}}" method="post">
			@csrf
			<button class="btn btn-secondary">
				<span style="color:skyblue;">{{auth()->user()->name}}
				</span>
				 Logout
			</button>
		</form>
		@else
		<a href="{{route('login')}}" class="btn btn-secondary">Login</a>
		@endauth
	</div>
	<div class="container">
		
	@yield('content')
	</div>
	<div class="bg-dark text-white p-4 text-center">
		All right reserve {{date('Y')}}
		
	</div>
	
</body>
</html>