<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicsController extends Controller
{
    public function index()
    {
        return view('basic_pages.index');
    }

    public function about()
    {
        return view('basic_pages.about');
    }

    public function engagements()
    {
        return view('basic_pages.engagements');
    }
}
