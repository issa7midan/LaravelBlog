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
use Illuminate\Support\Facades\Route;
use App\Controllers\UserController;
use App\Controllers\PostController;
use App\User;

use App\Http\Controllers\CommentController;
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages.about');
});


Route::post('/login','LoginController@login');

Route::get('/token',function()
{
    return csrf_token();
});

Route::get('/login2','LoginController@test');

Route::post('/create','UserController@store');

Route::get('/isit',function()
    {
        $success = User::where('email','zain@issa1.com')->get();
        $success = json_decode($success,true);
        return $success[0]['password'];
    });

    Route::get('/comment','PostController@PostComment');
    Route::post('/users/update','UserController@update');
