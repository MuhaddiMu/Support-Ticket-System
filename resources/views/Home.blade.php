@extends('Include/Navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your Blog Posts</h3>
                    @if(count($Posts) > 0)
                        
                    
                    <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                        @foreach ($Posts as $Post)
                                    <td style="width: 1000px;">{{$Post->Title}}</td>   
                                    <td><a href="/Posts/{{$Post->id}}/edit/" class="btn btn-primary">Edit</button></td>   
                                    <td>
                                        <form action="{{action('PostsController@destroy', $Post->id)}}" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            @csrf
                                            <input type="submit" class="btn btn-danger float-right" value="Delete">
                                        </form>
                                    </td>   
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                    @else 
                        No Posts
                    @endif
                    <a href="/Posts/create" class="btn btn-block btn-primary">Create New Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
