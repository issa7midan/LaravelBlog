<?php

namespace App\Http\Controllers;
use App\Photo;
use Illuminate\Http\Request;
use App\Filter;
class PhotoController extends Controller
{
    //
    public function create(Request $request)
    {
        if (auth()->user() !== null ){
        $file       = $request -> file('image');
        $thumbnail  = date('mdYHis') . uniqid() . '.jpg';
        $savedImage = $request ->file('image')-> move('binary\assets\images\\',$thumbnail);
        $photo = array(
        "path"=>'binary/assets/images/'.$thumbnail, 
        "review_id"=>$request->review_id,
        "image"  => $request->file('image'),
        "post_id"=>$request->post_id);
        Photo::create($photo);
        return Filter::customizedResponse("Success",200);
        }
        else
        {
            return Filter::customizedResponse("Error",400);
        }
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
        if (auth()->user() !== null)
            Photo::whereId($id)->delete();
        else
            return Filter::customizedResponse('Unauthorized',403);
    }
}
