<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mtownsend\ReadTime\ReadTime;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$Posts = Post::orderBy('id', 'Desc')->get();
        //$Posts = Post::all(); 
        //return Post::take(3)->get();
        $Posts = Post::orderBy('id', 'Desc')->paginate(10);

        return view('Posts/Index')->with('Posts', $Posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Posts/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Title' => 'required',
            'Body' => 'required',
        ]);

        $Post = new Post;
        $Post->Title = $request->input('Title');
        $Post->Body = $request->input('Body');
        $Post->User_id = auth()->user()->id;
        $Post->save();

        return redirect('/Posts')->with('Success', 'Success! Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Post = Post::find($id);
        //return Post::Where('id', '1')->get();
        //$readTime = (new ReadTime($Post))->get();

        return view('Posts/Show')->with('Post', $Post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Post = Post::find($id);
        return view('Posts/Update')->with('Post', $Post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Title' => 'required',
            'Body' => 'required',
        ]);

        $Post = Post::find($id);
        $Post->Title = $request->input('Title');
        $Post->Body = $request->input('Body');
        $Post->save();

        return redirect('/Posts')->with('Success', 'Success! Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Post = Post::find($id);
       $Post->delete();

       return redirect('/Posts')->with('Success', 'Success! Post Deleted');
    }
}
