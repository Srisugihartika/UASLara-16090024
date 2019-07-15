<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
    	return view('layouts.login');
    }

    public function masuk()
    {
        return view('dashboard');
    }
}
