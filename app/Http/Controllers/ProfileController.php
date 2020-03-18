<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user)
    {
        // if user is not found, 404
        $user = \App\User::findOrFail($user);

        // home is referring to the home.blade.php file
        // we've renamed home to index.blade.php and moved it to profiles
        return view('profiles/index', [
            'user' => $user
        ]);
    }

    // this is another way of passing in user like we did above to the index public function
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
    
    // form validation when updating profile changes
    public function update()
    {
        $data = request()->validate([
            'title' => '',
            'description' => '',
            'url' => '',
            'image' => '',
        ]);

        dd($data);
    }
}
