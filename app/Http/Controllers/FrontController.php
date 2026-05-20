<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function page()
    {
        return view('page');
    }

    public function test()
    {
        return view('test');
    }
}
