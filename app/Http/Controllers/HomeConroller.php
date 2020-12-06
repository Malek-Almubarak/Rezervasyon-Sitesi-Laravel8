<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeConroller extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}
