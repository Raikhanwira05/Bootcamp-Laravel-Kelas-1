<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('page.register');
    }

    public function welcome(Request $request)
    {
        $fname = $request->input('firstname');
        $lname = $request->input('lastname');

        return view('page.welcome', ['fname' => $fname, 'lname' => $lname]);
    }
}
