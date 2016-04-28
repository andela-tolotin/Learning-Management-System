<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('main.pages.single_video');
});

Route::get('/login', function () {
    return view('main.pages.auth.userlogin_form');
});

Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });

    Route::get('/add-category', function () {
        return view('dashboard.pages.video_category');
    });

    Route::get('/view-category', function () {
        return view('dashboard.pages.list_video_categories');
    });

    Route::get('/add-video', function () {
        return view('dashboard.pages.add_video');
    });
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');
});
