<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('user.index', compact('posts'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);

        // Post::create($request->all());
        Post::create([
            "title"=> $request->title,
            "description"=> $request->description,
            "user_id"=> Auth::user()->id
        ]);
        return redirect()->route('note#index')->with('success','Post created successfully.');
    }

    // public function show(Post $post)
    // {
    //     return view('posts.show', compact('post'));
    // }

    public function edit(int $id)
    {
        $note = Post::find($id);
        return view('user.update', compact('note'));
    }

    public function update(Request $request, int $id)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);

        $note = Post::find($id);

        $note->update([
            "title"=> $request->title,
            "description"=> $request->description,
            "user_id"=> Auth::user()->id
        ]);
        return redirect()->route('note#index')->with('success','Post updated successfully.');
    }

    public function destroy(int $id)
    {
        $note = Post::find($id);
        $note->delete();
        return redirect()->route('note#index')->with('success','Post deleted successfully.');
    }

}
