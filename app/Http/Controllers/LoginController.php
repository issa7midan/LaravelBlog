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
        // $request->validate(['email'=>'required|email',
        //                     'password'=>'required|min:8']);
                            
        // $success = User::where('email',$request->email)->get();

        // //  if (count($success)> 0){
        // //     $password = json_decode($success,true);
        // //     $password = $success[0]['password'];
        // //   if (Hash::check($request->password, $password)) 
        // // {
        // //     return "login success";
        // // }
        // //     else 
        // //     return "login fail";
        // //  }
        // // else 
        // //     return "login fail";
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
        $authToken = $user->createToken('auth-token')->plainTextToken;
        return response()->json(['access_token'=>$authToken,]);
    }
}