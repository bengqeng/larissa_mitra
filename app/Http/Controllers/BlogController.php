<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Blog::paginate(10);
        $pagination = [
            'total'        => $articles->total(),
            'per_page'     => $articles->perPage(),
            'current_page' => $articles->currentPage(),
            'last_page'    => $articles->lastPage(),
            'from'         => $articles->firstItem(),
            'to'           => $articles->lastItem()
        ];
        return view('public.blog', compact('articles', 'pagination'));
    }

    public function show($slug)
    {
        $article = Blog::where('slug', $slug)->firstOrFail();
        $articles = Blog::paginate(3);
        return view('public.blog-single', compact('article', 'articles'));
    }
}
