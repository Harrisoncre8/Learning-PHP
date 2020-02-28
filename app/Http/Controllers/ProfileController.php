<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user)
    {
        $user = \App\User::find($user);

        // home is referring to the home.blade.php file
        return view('home', [
            'user' => $user
        ]);
    }
}
