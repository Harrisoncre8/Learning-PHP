<?php

namespace App\Http\Controllers;

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
}
