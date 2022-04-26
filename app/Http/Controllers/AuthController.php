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
        $user = auth()->user();
        return $user->where('id',$user->id)->get(['id', 'email', 'first_name', 'last_name']);
    }
}
