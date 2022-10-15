<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(StoreCategoryRequest $request)
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

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $filePath = $category->image_url;
        if ($request->file('image')) {
            if ($filePath) {
                Storage::delete($category->image_url);
            }
            $filePath = optional($request->file('image'))->store('public/images');
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $filePath,
            'status' => $request->status,
        ]);

        return redirect()->route('categories.index')
            ->with('success', __('messages.successfully'));
    }

    public function destroy(Category $category)
    {
        return $category->delete();
    }
}
