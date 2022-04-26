<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //
    public function store (Request $request)
    {
        if (auth()->user() !== null ){
                $post = array('postTypeID'        => $request->postTypeID, 
                             'user_id'            => $request->user_id,
                             'content'            => $request->content,);
                Post::create($post);
        }
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
        }
    }

    public function allPosts ()

    {
        
        $post = Post::all();
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
}

