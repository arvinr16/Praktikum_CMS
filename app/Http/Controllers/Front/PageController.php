<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function show(Page $page)
    {
        return view('pages.show', compact('page'));
    }
}