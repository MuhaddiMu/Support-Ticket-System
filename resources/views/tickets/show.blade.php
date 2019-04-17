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
					<button type="submit" class="btn btn-danger">Delete</a>
					</div>
				</form>
				</div>
				</div>
			</div>


			@foreach ($Comments as $Comment)
				<div class="pt-3 container col-md-8">
					<div class="card">
						<div class="card-body">
							{{str_limit($Comment->content, 300)}}
						</div>
					</div>
				</div>
			@endforeach

<div class="pt-3 container col-md-8">
	<div class="card">
			<div class="card-body">
				<h5 class="card-title">Reply</h5>
			@include('Layouts/errors')														
			  <form action="/Comment" method="POST" class="form-horizontal" >
				@csrf
				<input type="hidden" name="post_id" value="{{$Ticket->id}}">
					<div class="form-group">
					  <label for="Content" class="bmd-label-floating">Content</label>
					  <textarea id="Content" name="Content" class="form-control" rows="3"></textarea>
					</div>  
					<button type="submit" class="btn btn-primary">Submit</
				  </form>
			</div>
			</div>
</div>



@endsection