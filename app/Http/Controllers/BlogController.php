<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $blogs = new Blog();
        $request -> validate([
            'name' => 'required',
            'author' => 'required',
            'slug' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);
        $work->name = $request->name;
        $work->author = $request->author;
        $work->slug = $request->slug;
        $work->category = $request->category;
        $work->content = $request->content;
        $work->save();
        return redirect('/');
    }
}
