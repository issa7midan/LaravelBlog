<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Filter;
class PostController extends Controller
{
    //
    public function store (Request $request)
    {
        if (auth()->user() !== null ){
                $post = array('postTypeID'        => $request->postTypeID, 
                             'user_id'            => $request->user_id,
                             'content'            => $request->content,
                             'title'              => $request->title);
                Post::create($post);
                return Filter::customizedResponse("Success",200);
        }
        else
            return Filter::customizedResponse('Unauthorized',403);
    }

    public function destroy (Request $request)
    {
        if (auth()->user() !== null )
         $post= Post::whereId($request->id)->delete();
    }

    public function update (Request $request)
    {
        if (auth()->user() !== null){
            $post = Post::findOrFail($request->id);
            $post->update($request->all());
            return Filter::customizedResponse('Success',200);
        }
        else
           return Filter::customizedResponse('Unauthorized',403);
    }

    public function allPosts ()

    {
        $post = Post::all();
        $post = Filter::customizedResponse($post,200);
        return $post;
    }
    public function PostComment(){
        $post = Post::all();
        echo $post;
        foreach ($post as $comment)
        {
            echo $comment->comment;
        }
    }

    public function getPostById($id) {
        $post = Post::find($id);
        if(strlen($post->content) > 0)
            $post = Filter::customizedResponse($post, 200);
        else
            $post = Filter::customizedResponse("No Post", 400);
        return $post;
    }
}

