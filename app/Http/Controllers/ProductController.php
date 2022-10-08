<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::latest()->get();

        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        try  {
            DB::beginTransaction();
            $filePath = optional($request->file('avatar'))->store('public/images');

            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'status' => $request->status,
                'user_id' => Auth::id(),
                'avatar_url' => $filePath,
            ]);

            $product->categories()->attach($request->category_ids);

            foreach ($request->file('images', []) as $image) {
                $filePath = $image->store('public/images');
                $product->images()->create(['url' => $filePath]);
            }

            DB::commit();

            return response()->json($product->load('categories', 'images'));
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', __('messages.successfully'));
    }
}
