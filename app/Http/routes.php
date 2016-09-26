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

Route::get('sendemail', function () {

    $data = array(
        'name' => "Learning Laravel 2222",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('admin@topiqu.com', 'Topiqu Administrator');

        $message->to('edwardjulius@gmail.com')->subject('Welcome to Topiqu.com!');

    });

    return "Your email has been sent successfully";

});

// topiqu.com
Route::get('/', function () {
    return view('index');
});

// topiqu.com/top
Route::get('/top', function () {
    return view('top');
});

// topiqu.com/new
Route::get('/new', function () {
    return view('new');
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

// topiqu.com/t/{topiq}
Route::get('thread/{topiq}', 'ThreadController@showThread($topiq)');
// topiqu.com/t/{topiq}/{post}
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
// topiqu.com/t/{topiq}/post
// topiqu.com/t/{topiq}/{post}/comment

});