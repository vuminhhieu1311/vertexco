<?php

namespace App\Http\Controllers;

use App\Enums\CategoryStatus;
use App\Enums\ProductStatus;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Product::class);
        $products = Product::latest()->get();

        return view('product.index', compact('products'));
    }

    public function create()
    {
        $this->authorize('create', Product::class);
        $categories = Category::latest()->get();

        return view('product.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        $this->authorize('create', Product::class);

        try {
            DB::beginTransaction();
            $filePath = optional($request->file('avatar'))->store('images', ['disk' => 'public_storage']);

            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'status' => $request->status,
                'user_id' => Auth::id(),
                'avatar_url' => $filePath,
                'discount' => $request->discount,
                'discount_deadline' => $request->discount_deadline,
                'instruction' => $request->instruction,
            ]);

            $product->categories()->attach($request->category_ids);

            foreach ($request->file('images', []) as $image) {
                $filePath = $image->store('images', ['disk' => 'public_storage']);
                $product->images()->create(['url' => $filePath]);
            }

            DB::commit();

            return response()->json($product);
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }
    }

    public function show(Product $product)
    {
        $product->load('ratings.user');

        return view('customer.product_detail', compact('product'));
    }

    public function edit(Product $product)
    {
        $this->authorize('update', $product);
        $categories = Category::latest()->get();
        $product->category_ids = $product->categories->pluck('id')->toArray();

        return view('product.edit', compact('product', 'categories'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $this->authorize('update', $product);

        try {
            DB::beginTransaction();
            $filePath = $product->avatar_url;
            if ($request->file('avatar')) {
                $filePath = optional($request->file('avatar'))->store('images', ['disk' => 'public_storage']);
            }

            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'status' => $request->status,
                'avatar_url' => $filePath,
                'discount' => $request->discount,
                'discount_deadline' => $request->discount_deadline,
                'instruction' => $request->instruction,
            ]);

            $product->categories()->sync($request->category_ids);

            DB::commit();

            return redirect()->route('products.index')
                ->with('success', __('messages.successfully'));
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);

        return $product->delete();
    }

    public function showProductImages(Product $product)
    {
        return response()->json($product->images);
    }

    public function deleteProductImage(Product $product, $imageId)
    {
        $this->authorize('update', $product);

        if ($imageId) {
            return $product->images()->whereId($imageId)->delete();
        }

        return null;
    }

    public function storeProductImage(Request $request, Product $product)
    {
        $this->authorize('update', $product);

        $filePath = optional($request->file('image'))->store('images', ['disk' => 'public_storage']);
        $product->images()->create(['url' => $filePath]);

        return response()->json('success');
    }

    public function getPublishedProducts(Request $request)
    {
        $categories = Category::where('status', CategoryStatus::PUBLISHED) ->latest()->get();

        $products = Product::where('status', ProductStatus::PUBLISHED)
            ->when(request('name'), function ($query) {
                return $query->where('name', 'LIKE', '%' . request('name') . '%');
            })
            ->when(request('category_id'), function ($query) {
                return $query->whereHas('categories', function ($q) {
                    return $q->where('categories.id', request('category_id'));
                });
            })
            ->latest()->paginate(9);

        return view('customer.home', compact('products', 'categories'));
    }
}
