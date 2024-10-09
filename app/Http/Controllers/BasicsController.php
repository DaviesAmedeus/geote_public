<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicsController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function engagements()
    {
        return view('home.engagements');
    }
}
