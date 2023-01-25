<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $work = Work::all();
        return view('work')->with('work', $work);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $work = new Work();
        $request -> validate([
            'name' => 'required',
            'page_link' => 'required',
            'github_link' => 'required',
            'description' => 'required'
        ]);
        $work->name = $request->name;
        $work->page_link = $request->page_link;
        $work->github_link = $request->github_link;
        $work->description = $request->description;
        $work->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Work $work)
    {
        return view('works.show')->with('work', $work);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Work $work)
    {
        return view('works.edit')->with('work', $work);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Work $work)
    {
        $request -> validate([
            'name' => 'required',
            'page_link' => 'required',
            'github_link' => 'required',
            'description' => 'required'
        ]);
        $work->name = $request->name;
        $work->page_link = $request->page_link;
        $work->github_link = $request->github_link;
        $work->description = $request->description;
        $work->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Work $work)
    {
        $work->delete();
        return redirect('/');
    }
}
