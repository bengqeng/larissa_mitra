<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportForm;

class BlogController extends Controller
{
    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Blog::get();

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
            'title'          => 'required|string|unique:blogs|max:255',
            'body'           => 'required',
            'image'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:1080'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $article = new Blog();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->published_date = Carbon::now();
        $article->author_id = Auth::id();
        $article->slug = Str::slug($article->title);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images/blogs');
            $article->image = $path;
        }

        if ($article->save()) {
            flash()->success('Artikel <a href="' . route('admin.blogs.show', $article->id) . '" >' . $article->title . '</a> berhasil ditambahkan');
        } else {
            flash()->danger('Gagal menambahkan artikel, mohon cek kembali dan pastikan koneksi internet Anda stabil');
        }
        return redirect()->route('admin.blogs.show', $article->id)
            ->with('success', 'Artikel berhasil disimpan');
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
        return view('admin.cms.show_blog', compact('article'));
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Blog::findOrFail($id);
        return view('admin.cms.edit_blog', compact('article'));
    }

    /**
     * Update the specified article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Blog::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'body' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/blogs');
            $image->move($destinationPath, $filename);
            $article->image = $filename;
        }

        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();

        if ($article->save()) {
            flash()->success('Artikel <a href="' . route('admin.blogs.show', $article->id) . '" >' . $article->title . '</a> berhasil diubah');
        } else {
            flash()->danger('Gagal mengubah artikel, mohon cek kembali dan pastikan koneksi internet Anda stabil');
        }
        return redirect()->route('admin.blogs.index', $article->id);
    }

    public function destroy($id)
    {
        $article = Blog::findOrFail($id);
        $image = $article->image;
        $article->delete();

        // Delete the image from storage
        if (!empty($image)) {
            Storage::delete('public/images/blogs/' . $image);
        }
        flash()->success('Artikel berhasil dihapus');
        return redirect()->route('admin.blogs.index');
    }
}
