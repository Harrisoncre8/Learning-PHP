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
}
