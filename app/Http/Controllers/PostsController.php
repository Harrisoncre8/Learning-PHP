<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

        // resizing uploaded image. This will take our image and wrap it
        // in the intervention class and then fit it by 1200px width and height
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        // save image
        $image->save();

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

    // automatically fetching our post, if post does not exist, will display 404 
    // on front end
    public function show(\App\Post$post)
    {
        return view('posts/show', [
            'post' => $post,
        ]);
    }
}
