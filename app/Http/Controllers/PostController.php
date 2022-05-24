<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Filter;
use DB;
class PostController extends Controller
{
    //
    public function store (Request $request)
    {
        if (auth()->user() !== null ){
            $file = $request -> file('image');
            $thumbnail = $file->getClientOriginalName();
            $thumbnail = trim($thumbnail);
            $thumbnail =strtolower($thumbnail);
            $file -> move('binary\assets\images\thumbnails');
                $post = array('postTypeID'        => $request->postTypeID, 
                             'user_id'            => $request->user_id,
                             'content'            => $request->content,
                             'title'              => $request->title,
                             'thumbnail'          => 'binary\assets\images\thumbnails\\'.$thumbnail,
                             'file'               => $request->file('image')
                            );
                            
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
    public function postByPageNum($id)
    {
        $id = ($id -1) * 6;
        $posts = DB::table("users")
        ->join("posts",'users.id','=','posts.user_id')
        ->offset($id)
        ->limit(6)
        ->select("posts.*", "users.first_name", "users.last_name")
        ->get();
        if (strlen($posts[0]->content) > 0)
            $posts = Filter::customizedResponse($posts, 200);
        else
            $posts = Filter::customizedResponse("No Post", 400);    
        return $posts;
    }
}

