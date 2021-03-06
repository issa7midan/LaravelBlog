<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostType;

class postTypeController extends Controller
{
    //
    public function create(Request $request){
        $postType = array('postType' => $request->postType);
        PostType::create($postType);
    }

    public function destroy(Request $request){
        if (auth()->user() !== null )
            $postType = PostType::whereId($request->id)->delete();
        else
            return Filter::customizedResponse('Unauthorized',403); 

    }
    public function allTypes(){
        $postType = PostType::all();
        return $postType;
    }
    public function update(Request $request){
        $postType = PostType::findOrFail($request->id);
        $postType->update($request->all());
        
    }

}
