<?php
// ============================================================
//  FILE: app/Http/Controllers/Front/ContactController.php
//  REVISI dari versi PDF — store() sekarang memvalidasi field
//  'phone' karena form contact/index.blade.php mengirim field ini
//  (sesuai migration messages: name, email, phone, message)
// ============================================================

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
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        return back()->with('success', 'Pesan Anda berhasil dikirim! Tim kami akan segera menghubungi Anda.');
    }
}
