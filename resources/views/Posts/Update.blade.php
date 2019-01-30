@extends('Layouts/Layout')
@section('Content')
	<h1>Edit Post</h1>
	<form action="{{action('PostsController@update', $Post->id)}}" method="post">
		@csrf
		<div class="form-group">
			<label for="Title">Your Post Title</label>
			<input type="text" value="{{$Post->Title}}" name="Title" id="Title" class="form-control" placeholder="Post Title">
		</div>

		<div class="form-group">
				<label for="article-ckeditor">Post Content</label>
				<textarea name="Body" id="article-ckeditor" class="form-control" placeholder="Post Content" rows="10">{{$Post->Body}}</textarea>
		</div>
		<input type="hidden" name="_method" value="PUT">
		<button class="btn btn-primary" type="submit">Update Post</button>
	</form>
@endsection