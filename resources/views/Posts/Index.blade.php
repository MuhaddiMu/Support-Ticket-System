@extends('Layouts/Layout')
@section('Content')
	<h1>Posts</h1>
	@if(count($Posts) > 0)
		@foreach ($Posts as $Post)
		<div class="card card-body bg-light">
			<a href="/Posts/{{$Post->id}}"><h3>{{$Post->Title}}</h3></a>
				<small>Posted on {{$Post->created_at->toFormattedDateString()}}</small>
			</div>
		@endforeach
		
		<p>{{$Posts->links()}}</p>
	@endif
@endsection