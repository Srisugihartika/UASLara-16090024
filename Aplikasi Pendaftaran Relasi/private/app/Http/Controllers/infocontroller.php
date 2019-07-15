<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infocontroller extends Controller
{
    public function user()
    {
    	return view('template.info');
    }
}
