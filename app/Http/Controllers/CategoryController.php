<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $filePath = optional($request->file('image'))->store('public/images');

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $filePath,
            'status' => $request->status,
        ]);

        return redirect()->route('categories.index')
            ->with('success', __('messages.successfully'));
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {

    }

    public function update(Request $request, Category $category)
    {
        Storage::delete($category->image_url);
        $filePath = optional($request->file('image'))->store('public/images');

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => Storage::url($filePath),
            'status' => $request->status,
        ]);

        return redirect()->route('categories.index')
            ->with('success', __('messages.successfully'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', __('messages.successfully'));
    }
}
