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
// /p/create will go to the PostsController 
// and run our @create method
Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');
Route::post('/p', 'PostsController@store');


// calling the index method inside the home controller
// profile route for user profiles
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
// adding edit route for user to edit only their profile
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
