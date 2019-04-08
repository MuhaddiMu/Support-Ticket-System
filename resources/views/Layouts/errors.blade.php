@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach

@if(session('Status'))
<div class="alert alert-success">{{session('Status')}}</div>
@endif