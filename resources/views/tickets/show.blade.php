@extends('Layouts/master')
@section('Title', 'View a Ticket')

@section('Content')

<div class="pt-3 container col-md-8">
		<div class="card">
				<div class="card-body">
					<h5 class="card-title">{{$Ticket->title}}</h5>
				<p><strong>Status: </strong>{{$Ticket->status ? 'Pending' : 'Answered'}}</p>
				<p>{{$Ticket->content}}</p>
				<form action="{{action('TicketsController@destroy', $Ticket->slug)}}" method="POST" class="form-inline">
					@method('DELETE')
					@csrf
				<a href="{{$Ticket->slug}}/edit" class="btn btn-info">Edit</a>
					<div>
					<button type="submit" class="btn btn-danger">Delete</a>
					</div>
				</form>
				</div>
				</div>
				
</div>



@endsection