<?php

namespace App\Http\Controllers;
use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function create(Request $request)
    {
        $photo = array(["path"=>$request->path, 
        "review_id"=>$request->review_id,
        "post_id"=>$request->post_id]);
        Photo::create($photo);
    }

    public function viewAll()
    {
        return  Photo::all();
    }

    public function viewByID($id)
    {
        return Photo::findOrFail($id);
    }

    public function destroy($id)
    {
        Photo::whereId($id)->delete();
    }
}
