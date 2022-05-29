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

// ************* VIEWS *********************
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/index',function(){
    return view('index');
});

Route::get('/blog/{id}',function(){
    return view('pages.blog');
});

Route::get('/post-details/{id}',function(){
    return view('pages.post-details');
});

Route::get('/contact',function(){
    return view('pages.contact');
});

Route::get('/blog',function(){
    return redirect('/blog/1');
});

// *********** LOGIN ROUTES ***********
Route::get('/login', function(){
    return view ('pages.login');
});

Route::post('/user/login','LoginController@login');

Route::get('/authuser','AuthController@authUser');

Route::get('/logout', 'AuthController@logout');

Route::get('/user/userById/{id}','UserController@userById');
//************ POST ROUTES **************
Route::post('/writepost', 'PostController@store');

Route::get('/post',function(){
    return view('pages.post');
});
Route::post('/newpost',function(){
    return view ('pages.writepost');
});
Route::post('/updatepost', 'PostController@update');

Route::delete('/deletepost', 'PostController@destroy');

Route::get('/allposts', 'PostController@allPosts');

Route::get('/blogPosts/{id}','PostController@postByPageNum');
//******************* COMMENTS ********************

Route ::post('/writecomment', 'CommentController@create');

Route::get('/commentsCount', 'CommentController@commentsCount');

Route::get('/token',function()
{
    return csrf_token();
});

Route::post('/create','UserController@store');

Route::post('/users/update','UserController@update');


Route::get('/comment/{id}','CommentController@getCommentByPostID');

Route::get('/post/{id}','PostController@getPostById');



//***************************** LOCALIZER **************** */
Route::get('/en.json', function(){
    $path = resource_path("lang/en.json");
    $json = file_get_contents($path);
    return $json;
    //return resource_path("public/binary/assets/lang/en.json");
});

Route::get('/de.json', function(){
    $path = resource_path("lang/de.json");
    $json = file_get_contents($path);
    return $json;
    //return resource_path("public/binary/assets/lang/en.json");
});