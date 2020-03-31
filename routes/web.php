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

// post route for the follow user button
Route::post('follow/{user}', 'FollowsController@store');

// route for individual image posts
// /p/create will go to the PostsController 
// and run our @create method
// routes also need to be in order to work properly
Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');
Route::post('/p', 'PostsController@store');


// calling the index method inside the home controller
// profile route for user profiles
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
// adding edit route for user to edit their profile based on their id
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
// put/patch route to update user profile
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');

