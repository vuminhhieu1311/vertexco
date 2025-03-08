<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Hiển thị danh sách bài viết
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    // Hiển thị form tạo bài viết
    public function create()
    {
        $categories = Category::where('type', CategoryType::POST)->latest()->get();

        return view('posts.create', compact('categories'));
    }

    // Lưu bài viết mới
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $filePath = optional($request->file('thumbnail'))->store('images', ['disk' => 'public_storage']);

            $post = Post::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'order' => $request->order,
                'excerpt' => $request->excerpt,
                'thumbnail' => $filePath,
                'content' => $request->content,
                'user_id' => Auth::id(),
                'is_published' => $request->input('is_published', false),
                'is_featured' => $request->input('is_featured', false),
            ]);

            $post->categories()->attach($request->category_ids);
            DB::commit();

            return redirect()->route('posts.index')->with('success', 'Bài viết đã được tạo thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Lỗi khi tạo bài viết: ' . $e->getMessage());
        }
    }

    // Hiển thị chi tiết bài viết
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Hiển thị form chỉnh sửa
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Cập nhật bài viết
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());
        return redirect()->route('posts.index')
            ->with('success', 'Bài viết đã được cập nhật thành công.');
    }

    // Xóa bài viết
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Bài viết đã được xóa thành công.');
    }
}
