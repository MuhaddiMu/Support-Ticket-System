<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use app\http\Requests\CommentFormRequest;

class CommentsController extends Controller
{
    public function NewComment(Request $request){

        $this->validate($request, [
            'post_id' => 'required',
            'Content' => 'required',
        ]);

        $Comment = new Comment;
        $Comment->content = $request->input('Content');
        $Comment->post_id = $request->input('post_id');
        $Comment->save();
        return redirect()->back()->with('Status', 'Comment as been added');
    }
}
