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

Route::get('/', function () {
    return view('abc');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/blog-home', function () {
    return view('blog-home');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Auth::routes(['verify'=>true]);

Route::get('/verify',function(){
        return view('auth.verify');
    } );

Route::get('/home', 'HomeController@index')->name('home');
