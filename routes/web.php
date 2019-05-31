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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/tutors', function () {
    return view('tutorsPosts');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/posts', function () {
    return view('posts');
});

Auth::routes(['verify'=>true]);

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
