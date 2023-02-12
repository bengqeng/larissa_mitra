<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['email', 'required']
        ]);
        $email = NewsLetter::where('email', $request->email)->exists();
        if ($email) {
            session(['subscriber' => true]);
            return redirect()->route('public.index')->with('subscribe', 'Kamu telah subscribe sebelumnya');
        } else {
            $result = NewsLetter::firstOrCreate(['email' => $validated['email']]);
            if ($result) {
                session(['subscriber' => true]);
                return redirect()->route('public.index')->with('subscribe', 'Kamu berhasil subscribe, tunggu berita terbaru kami :)');
            } else {
                session(['subscriber' => false]);
                return redirect()->route('public.index')->with('subscribe', 'Kami tidak dapat mendaftarkan email kamu :(');
            }
        }
    }
}
