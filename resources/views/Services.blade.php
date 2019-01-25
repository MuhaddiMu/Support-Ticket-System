@extends('Layouts/Layout')

@section('Content')
	<h1>Services</h1>
	@if(count($Services > 0))
		<ul class="list-group">
		@foreach ($Services as $Service)
			<li class="list-group-item">{{$Service}}</li>
		@endforeach
		</ul>
	@endif
@endsection