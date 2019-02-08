@extends('Layouts/Layout')
@section('Content')
	<h1>Posts</h1>
	@if(count($Posts) > 0)
		@foreach ($Posts as $Post)
		<div class="card bg-light">
				<img class="card-img-top rounded mx-auto d-block" style="width:30%;" src="/storage/Imgs/{{$Post->Img}}">
			<div class="card-body">
			
				<a class="card-title text-center" href="/Posts/{{$Post->id}}"><h3>{{$Post->Title}}</h3></a>
					<small class="text-xs-center">Posted on {{$Post->created_at->toFormattedDateString()}} by {{$Post->user['name']}}</small>
				</div>
			</div><br>
		@endforeach
		
		<p>{{$Posts->links()}}</p>
	@else
		No Posts Found, Go and Craft one<a href="/Posts/create">New Post</a>
	@endif
@endsection