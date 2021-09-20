<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (! Gate::allows('create-post')) {
        //     abort(403);
        // }
        return view('dashboard.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (! Gate::allows('create-post')) {
        //     abort(403);
        // }
        $store = new Post;
        $store->title = $request->title;
        $store->description = $request->description;
        $store->user_id = $request->user()->id;
        $store->save();
        return redirect('/dashboard/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // if (! Gate::allows('view-post', $post)) {
        //     abort(403);
        // }
        $colors = ['red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'];
        return view('dashboard.pages.blog.show', compact('post', 'colors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // if (! Gate::allows('update-post', $post)) {
        //     abort(403);
        // }
        return view('dashboard.pages.blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // if (! Gate::allows('update-post', $post)) {
        //     abort(403);
        // }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->push();
        return redirect('/dashboard/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // if (! Gate::allows('delete-post', $post)) {
        //     abort(403);
        // }
        $post->delete();
        return redirect('/dashboard/blog');
    }
}
