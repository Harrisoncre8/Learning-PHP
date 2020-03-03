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
    return view('welcome');
});

Auth::routes();

// route for individual image posts
// @create is the action handled by the PostsController
Route::get('/p', 'PostsController@create');

// calling the index method inside the home controller
// profile route for user profiles
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
