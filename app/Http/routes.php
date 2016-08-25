<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// topiqu.com
Route::get('/', function () {
    return view('index');
});

// topiqu.com/login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', 'Auth\AuthController@login');

// topiqu.com/register
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', 'Auth\AuthController@register');

// topiqu.com/logout
Route::get('logout', 'Auth\AuthController@logout');

// topiqu.com/forgot
Route::get('/forgot', function () {
    return view('forgot');
});

// topiqu.com/thread/{topiq}
Route::get('thread/{topiq}', 'ThreadController@showThread($topiq)');
// topiqu.com/thread/{topiq}/{post}
Route::get('thread/{topiq}/{post}', 'ThreadController@showThread($topiq)');

// Authenticated Users Routes
Route::group(['middleware' => 'auth'], function () {
// topiqu.com/user/{username}
Route::get('user/{username}', 'UserController@showProfile');
// topiqu.com/inbox
// topiqu.com/message/{username}
// topiqu.com/settings
// topiqu.com/dashboard
// topiqu.com/post
// topiqu.com/thread/{topiq}/post
// topiqu.com/thread/{topiq}/{post}/comment
});