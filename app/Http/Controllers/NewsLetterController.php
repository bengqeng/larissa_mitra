<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'email' => ['email', 'required']
        ]);

        NewsLetter::firstOrCreate(['email' => $validated['email']]);
        return redirect()->back();
    }
}
