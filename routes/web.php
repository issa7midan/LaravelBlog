<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Controllers\UserController;
use App\Controllers\PostController;
use App\User;
use App\Http\Controllers\CommentController;
Route::get('/', function () {
    return view('welcome');
});


Route::post('/login','LoginController@login');

Route::get('/token',function()
{
    return csrf_token();
});

Route::get('/login2','LoginController@test');

Route::get('/hash',function (){
    $password = "ahmad";
    $hashed = Hash::make($password);
    return $hashed;
});

Route::post('/create','UserController@store');

Route::get('/isit',function()
    {
        $success = User::where('email','zain@issa1.com')->get();
        $success = json_decode($success,true);
        return $success[0]['password'];
    });

    Route::get('/comment','PostController@PostComment');

