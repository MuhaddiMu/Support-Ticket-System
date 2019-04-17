@extends('Layouts/master')
@section('Title', 'Send Email')

@section('Content')

<div class="pt-3 container col-md-8">
		<div class="card">
				<div class="card-body">
					<h5 class="card-title">Send Email</h5>
					@include('Layouts/errors')					
				<form method="POST" class="form-horizontal" action="Mail">
						@csrf
					<div class="form-group">
						<label for="">To:</label>
						<input type="email" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label for="">Message</label>
						<textarea class="form-control" name="message"></textarea>
					</div>
					<input class="btn btn-success" type="submit" value="Send">
					  </form>
				</div>
				</div>
</div>
@endsection