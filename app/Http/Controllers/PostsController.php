<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
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
            'image' => 'required',
        ]);
        dd(request()->all());
    }
}
