<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function create(Request $request)
    {
        $comment = array(["first_name" => $request->first_name, "last_name"=>$request->last_name, "email"=>$request->email]);
        Comment::create($comment);
    }

    public function destroy ($id)
    {
        Comment::whereID($id)->delete();
    }

    public function getCommentByPostID($id)
    {
          $comment = Comment::where('post_id',$id)->get();
            foreach($comment as $comments){
                echo $comments;
        }
    }
}