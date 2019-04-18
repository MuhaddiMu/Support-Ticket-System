@extends('Layouts/master')
@section('Title', $Ticket->title . ' | Edit')

@section('Content')

<div class="pt-3 container col-md-8">
		<div class="card">
				<div class="card-body">
					<h5 class="card-title">Edit Ticket</h5>
					@include('Layouts/errors')					
				<form method="POST" class="form-horizontal" action="{{action('TicketsController@update', $Ticket->slug)}}">
						@csrf
						@method('PUT')
						<div class="form-group">
						  <label for="Title" class="bmd-label-floating">Title</label>
						  <input value="{{$Ticket->title}}" type="text" name="Title" id="Title" class="form-control">
						</div>
						<div class="form-group">
						  <label for="Content" class="bmd-label-floating">Content</label>
						  <textarea id="Content" name="Content" class="form-control" rows="3">{{$Ticket->content}}</textarea>
						  <span class="bmd-help">Feel free to ask us any question</span>
						</div>  
						<div class="form-group">
							<label>
								<input type="checkbox" name="Status" {{$Ticket->status ? "" : "checked"}}> Close this ticket?
							</label>
						</div>
						<a class="btn btn-default" href="{{ URL::previous() }}">Cancel</a>
						<button type="submit" class="btn btn-primary">Submit</button>
					  </form>
				</div>
				</div>
</div>
@endsection