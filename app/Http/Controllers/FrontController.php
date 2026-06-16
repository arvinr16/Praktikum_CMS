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

    public function cars()
    {
        return view('cars');
    }

    public function brand()
    {
        return view('brand');
    }

    public function test()
    {
        return view('test');
    }
}
