<?php

namespace App\Http\Controllers;
use App\Filter;
use App\Comment;
use Illuminate\Http\Request;
use Response;
class CommentController extends Controller
{
    public $restful = true;
    //
    public function create(Request $request)
    {
        if(auth()->user() !== null) {
            $comment = array("first_name" => $request->first_name, "last_name" => $request->last_name, "email" => $request->email,
            "comment" => $request->comment, "post_id" => $request->post_id);
            Comment::create($comment);
            return Filter::customizedResponse("Success",200);
        }else {
            return Filter::customizedResponse('Unauthorized',403);
        }
        
    }

    public function destroy($id)
    {
        Comment::whereID($id)->delete();
    }

    public function getCommentByPostID($id)
    {
        $comment = Comment::where('post_id', $id)->get();
        if (count($comment) > 0 )
            $comment = Filter::customizedResponse($comment,200);
        else 
            $comment = Filter::customizedResponse("No Post",400);
        return $comment;
    }

}
