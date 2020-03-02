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
        return view('home', [
            'user' => $user
        ]);
    }
}
