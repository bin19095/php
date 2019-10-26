@extends('master')

@section('content')

<div>
	<div>
		<h2>
			<h2>{{$posts->title}}
		</h2>
		<div>
			<p>{{$posts->content}}
		</p>
		</div>
	</div>
</div>
@stop