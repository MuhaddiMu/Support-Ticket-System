@extends('Layouts/Layout')
@section('Content')
	<h1>Create New Post</h1>
	<form action="{{action('PostsController@store')}}" method="post">
		@csrf
		<div class="form-group">
			<label for="Title">Your Post Title</label>
			<input type="text" name="Title" id="Title" class="form-control" placeholder="Post Title">
		</div>

		<div class="form-group">
				<label for="Body">Post Content</label>
				<textarea name="Body" id="Body" class="form-control" placeholder="Post Content" rows="10"></textarea>
		</div>
		<button class="btn btn-primary" type="submit">Create Post</button>
	</form>
@endsection