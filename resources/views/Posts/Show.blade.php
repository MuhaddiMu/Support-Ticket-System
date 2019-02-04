@extends('Layouts/Layout')
@section('Content')
<a href="/Posts" class="btn btn-primary">Go Back</a><br><br>
	<h1>{{$Post->Title}}</h1>
	{{$Post->created_at->toFormattedDateString()}} . {!!read_time($Post->Body)!!}
	<div class="card">
		<div class="card-body">
		  {!!$Post->Body!!}
			<hr>
		@if(!Auth::guest())
			@if($Post->User_id === auth()->user()->id)
				<a href="/Posts/{{$Post->id}}/edit" class="btn btn-primary">Edit</a>
				<form action="{{action('PostsController@destroy', $Post->id)}}" method="post" class="float-right">
					<input type="hidden" name="_method" value="DELETE">
					@csrf
					<input type="submit" class="btn btn-danger float-right" value="Delete Post">
				</form>
			@endif
		@endif
		</div>
		</div>
@endsection