<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:20',
            'content' => 'required|unique:posts|max:255',
            'status' => 'max:200'
        ]);

        Post::create($validated);

        return redirect()->route('posts.index')->with('success', 'Sitas postiš ir uztaisits veiksmigi puik!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $validated = $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:20',
            'status' => 'max:12',
        ]);

        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }

    public function duplicate(Post $post)
    {
        $dupPost = Post::create([
            'title' => "Copy of " . $post->title,
            'content' => $post->content
        ]);

        return redirect()->route('posts.show', $dupPost)->with('success', 'Post duplicated successfully!');
        // return view('posts.show', ['post' => $dupPost]);
    }

}

