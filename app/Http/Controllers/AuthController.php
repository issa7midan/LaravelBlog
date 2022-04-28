<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }

    public function authUser()
    {
        if (auth()->user() != null ){
        $user = auth()->user();
        $user =  $user->where('id',$user->id)->get(['id', 'email', 'first_name', 'last_name']);
        return Filter::customizedResponse($user,200);
        }
        return Filter::customizedResponse('Unuthenticated',403);
    }
}
