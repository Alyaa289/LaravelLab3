<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10); 
        return view('posts.viewPosts', compact('posts'));
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'create_by' => 'required|string|max:255',
        ]);

        Post::create($data);

        return redirect('/posts')->with('success', 'Post created successfully!');
    }

    
    public function show(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.viewPost', ["posts" => $posts]);    
    }

    
    public function edit(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.edit', data: ["posts" => $posts]);    
    }

    
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'create_by' => 'required|string|max:255',
        ]);

        $post = Post::findOrFail($id);
        $post->update($data);

        return redirect('/posts')->with('success', 'Post updated successfully!');
    }

    
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully!');
    }
}
