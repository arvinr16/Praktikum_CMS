<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      =>  'required|string|max:100',
            'email'     =>  'required|email|max:100',
            'message'   =>  'required|string',
        ]);

        Message::create($validated);

        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}