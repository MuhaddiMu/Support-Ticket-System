<html lang="{{config('app.locale')}}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
<title>{{config('app.name')}}</title>
</head>
<body>
		@include('Include/Navbar')
		<div class="container">
		@include('Include/Messages')
			@yield('Content')
		</div>
	<script src={{asset("/vendor/unisharp/laravel-ckeditor/ckeditor.js")}}></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>