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
Route::get('/p/create', 'PostsController@show');
Route::get('/p/{post}', 'PostsController@create');
Route::post('/p', 'PostsController@store');


// calling the index method inside the home controller
// profile route for user profiles
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
