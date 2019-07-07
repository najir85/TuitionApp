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

/*

Route::get('/', function () {
    return view('abc');
});

*/

Route::get('/', function () {

    return view('index');
});
 

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/posts', function () {
    return view('posts');
});

Auth::routes();

Route::get('/verify',function(){
        return view('auth.verify');
    } );

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//userinformation routes

Route::get('/showuserinfo', 'UserController@showUser');

Route::get('/createuser', 'UserController@createUser');

Route::post('/saveuser', 'UserController@saveUser');



//test profile page

Route::get('/testprofile', function () {
    return view('testprofile');
});


//posts routes

Route::get('/createPost', 'PostController@create');

Route::post('/storePost', 'PostController@store');

Route::get('/post', 'PostController@index');

Route::get('/post/{post}', 'PostController@show');

Route::get('/post/{post}/comments', 'CommentController@store');









