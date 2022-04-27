<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    //
    public function create(Request $request)
    {
        $review = array(["first_name"=>$request->first_name, "last_name"=>$request->last_name, "email"=>$request->email,
                         "content"=>$request->content]);
        Review::create($review);
    }

    public function destroy($id)
    {
        if (auth()->user() !== null )
            Review::whereID($id)->delete();
    }

    public function viewAll()
    {
        return Review::all();
    }
}
