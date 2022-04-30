<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Filter;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $request->validate(['first_name'=> 'required|string|max:30',
        // 'last_name' => 'reuired|string|max:30',
        // 'email'     => 'required|email',
        // 'password'  => 'required|min:8']);
        
        $validator = Validator::make($request->all(),['first_name'=> 'required|string|max:30',
        'last_name' => 'required|string|max:30',
        'email'     => 'required|email',
        'password'  => 'required|min:8']);
        if (!$validator->fails()){
            $user = array('first_name'        => $request->first_name, 
                        'last_name'         => $request->last_name,
                        'email'             => $request->email,
                        'password'          => Hash::make($request->password));

                        User::create($user);
                        return response()->json($user);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        if ( auth()->user() !== null ){
            $user = User::findOrFail($request->id);
            $user->update($request->all());
        }
        else 
        {
           return Filter::customizedResponse('Unauthorized',403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user() !== null )
            $user = User::whereId($id)->delete();
        else
            return Filter::customizedResponse('Unauthorized',403);
    }
    public function userById ($id)
    {
        $user = User::findOrFail($id);
        return Filter::customizedResponse($user,200);
    }
}