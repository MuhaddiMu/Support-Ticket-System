@extends('Layouts/master')
@section('Title', 'Create New Ticket')

@section('Content')

<div class="pt-3 container col-md-8">
		<div class="card">
				<div class="card-body">
				  <h5 class="card-title">Create New Ticket</h5>
				  <form>
						<div class="form-group">
						  <label for="Title" class="bmd-label-floating">Title</label>
						  <input type="text" name="" id="Title" class="form-control">
						</div>
						<div class="form-group">
						  <label for="Content" class="bmd-label-floating">Content</label>
						  <textarea id="Content" name="" class="form-control" rows="3"></textarea>
						  <span class="bmd-help">Feel free to ask us any question</span>
						</div>  
						<button class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary">Submit</
					  </form>
				</div>
			  </div>
</div>



@endsection