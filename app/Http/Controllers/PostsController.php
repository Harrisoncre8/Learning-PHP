<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // adding a contstructor function with auth middleware
    // so that all our data within the controller will require authorization
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        // creating a new view and putting it in a posts directory
        // can also be written as 'posts.create'
        return view('posts/create');
    }

    public function store()
    {
        // through the request(), validate that request
        // and give me all the validated data
        $data = request()->validate([
            'caption' => 'required',
            // cannot be blank and must be an image file
            'image' => ['required', 'image'],
        ]);

        // handling post request from image uploads and storing them in 'uploads' driver
        $imagePath = request('image')->store('uploads', 'public');
        
        // fetch authenticated user, go into thier post and create
        // caption is contained inside data at key of caption
        // and image is contained in the image path
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        // redirect the uploaded image process to authenticated user profile
        // fetching specific user by id
        return redirect('/profile/' . auth()->user()->id);
    }
}
