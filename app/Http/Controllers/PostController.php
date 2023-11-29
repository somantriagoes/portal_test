<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('blog.post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required',
            //'category_id' => 1
        ]);

        Post::create([
            'title'     => $request->title,
            'content'   => $request->content,
            'category_id'   => 1
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data have been saved!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $post = Post::findOrFail($id);
        return View('blog.edit_post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required'
        ]);

        $post = Post::findOrFail($id);

        $post->update([
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        return redirect()->route('posts.index')->with(['success' => 'data changed successfully!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : RedirectResponse
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with(['success' => 'Data have been deleted!']);
    }
}
