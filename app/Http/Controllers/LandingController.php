<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $articles = Blog::paginate(3);
        return view('public.index', compact('articles'));
    }
}
