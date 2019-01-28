@extends('Layouts/Layout')
@section('Content')
	<h1>{{$Post->Title}}</h1>
	<div class="card">
		<div class="card-body">
		  {{$Post->Body}}
		  <hr>
		  <small>Posted on {{$Post->created_at->toFormattedDateString()}}</small>
		</div>
	  </div>
@endsection