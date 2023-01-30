<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Blog::paginate(10);

        return view('admin.cms.blog', compact('articles'));

        // return view('admin.mitra.index', [
        //     'mitras' => Mitra::with('user')->Filter(['in_progress', 'rejected', 'success'])->get()
        // ]);
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cms.create_blog');
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'          => 'required|string|max:255',
            'body'           => 'required|string',
            'published_date' => 'required|date',
            'author_id'      => 'required|integer',
            'slug'           => 'required|string|max:255|unique:articles',
            'image'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $article = new Blog();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->published_date = $request->published_date;
        $article->author_id = $request->author_id;
        $article->slug = $request->slug;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $article->image = $path;
        }

        $article->save();

        return redirect()->route('articles.show', $article->id)
            ->with('success', 'Article created successfully');
    }

    /**
     * Display the specified article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Blog::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $article)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            Storage::delete($article->image);
            $path = $request->file('image')->store('public/images');
            $validated['image'] = $path;
        }

        $article->update($validated);

        return redirect()->route('articles.show', $article->id)
            ->with('success', 'Article updated successfully');
    }
}
