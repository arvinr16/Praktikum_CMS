<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function pages()
    {
        return view('pages');
    }

    public function cars()
    {
        return view('cars');
    }

    public function brands()
    {
        return view('brands');
    }

    public function articles()
    {
        return view('articles');
    }

    public function test()
    {
        return view('test');
    }
}
