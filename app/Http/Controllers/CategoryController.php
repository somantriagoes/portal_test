<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('blog.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required|min:5',
        ]);

        Category::create([
            'name'     => $request->name,
        ]);

        return redirect()->route('categories.index')->with(['success' => 'Data have been saved!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $categories = Category::findOrFail($id);
        return View('blog.edit_category', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $this->validate($request, [
            'name'     => 'required|min:5',
        ]);

        $post = Category::findOrFail($id);

        $post->update([
            'name'     => $request->name,
        ]);

        return redirect()->route('categories.index')->with(['success' => 'data changed successfully!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : RedirectResponse
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with(['success' => 'Data have been deleted!']);
    }

}
