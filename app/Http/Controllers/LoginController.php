<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
class LoginController extends Controller
{
    //
    public function login(Request $request)
    {

        $credentials = request(['email','password']);
        if (!auth()->attempt($credentials))
        {
            return response()->json([
                'message' => 'The given data was invalid.',
                    'errors'  => [
                        'password'=>[
                            'Invalid Credentials' 
                        ],
                    ]
                    ]);
        }
        $user = User::where('email', $request->email)->first();
        // $authToken = $user->createToken('auth-token')->plainTextToken;
        // return response()->json(['access_token'=>$authToken,]);
        
    }
}