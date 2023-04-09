<?php

namespace App\Http\Controllers;

use App\Enums\BrandStatus;
use App\Enums\CategoryStatus;
use App\Enums\ProductStatus;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Product::class);
        $products = Product::latest()->with('brand')->get();

        return view('product.index', compact('products'));
    }

    public function create()
    {
        $this->authorize('create', Product::class);
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        $colors = Color::all();
        $sizes = Size::all();

        return view('product.create', compact('categories', 'brands', 'colors', 'sizes'));
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
                'status' => $request->status,
                'user_id' => Auth::id(),
                'avatar_url' => $filePath,
                'discount' => $request->discount,
                'discount_deadline' => $request->discount_deadline,
                'brand_id' => $request->brand_id,
            ]);

            $product->categories()->attach($request->category_ids);

            foreach ($request->file('images', []) as $image) {
                $filePath = $image->store('images', ['disk' => 'public_storage']);
                $product->images()->create(['url' => $filePath]);
            }

            $colors = $request->input('colors', []);
            $sizes = $request->input('sizes', []);
            $quantities = $request->input('quantities', []);

            foreach ($colors as $key => $color) {
                $product->variants()->create([
                    'size_id' => $sizes[$key],
                    'color_id' => $color,
                    'quantity' => $quantities[$key],
                ]);
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
        $product->load([
            'ratings' => function ($query) {
                return $query->where('is_active', true);
            },
        ]);

        $colors = $product->variants->pluck('color')->unique();
        $sizes = $product->variants->pluck('size')->unique();

        return view('customer.product_detail', compact('product', 'sizes', 'colors'));
    }

    public function edit(Product $product)
    {
        $this->authorize('update', $product);
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        $colors = Color::all();
        $sizes = Size::all();
        $product->category_ids = $product->categories->pluck('id')->toArray();
        $product->load('variants');

        return view('product.edit', compact('product', 'categories', 'brands', 'colors', 'sizes'));
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
                'status' => $request->status,
                'avatar_url' => $filePath,
                'discount' => $request->discount,
                'discount_deadline' => $request->discount_deadline,
                'brand_id' => $request->brand_id,
            ]);

            $product->categories()->sync($request->category_ids);
            $product->variants()->delete();

            $colors = $request->input('colors', []);
            $sizes = $request->input('sizes', []);
            $quantities = $request->input('quantities', []);

            foreach ($colors as $key => $color) {
                $product->variants()->create([
                    'size_id' => $sizes[$key],
                    'color_id' => $color,
                    'quantity' => $quantities[$key],
                ]);
            }

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
        $categories = Category::where('status', CategoryStatus::PUBLISHED)->latest()->get();
        $brands = Brand::where('status', BrandStatus::PUBLISHED)->latest()->get();

        $products = Product::where('status', ProductStatus::PUBLISHED)
            ->whereHas('variants', function ($query) {
                return $query->where('quantity', '>', 0);
            })
            ->withCount('orders')
            ->orderBy('orders_count', 'desc')
            ->when(request('name'), function ($query) {
                return $query->where('name', 'LIKE', '%'.request('name').'%');
            })
            ->when(request('categories'), function ($query) {
                return $query->whereHas('categories', function ($q) {
                    return $q->whereIn('categories.id', request('categories'));
                });
            })
            ->when(request('brands'), function ($query) {
                return $query->whereIn('brand_id', request('brands'));
            })
            ->latest()->paginate(9);

        return view('customer.home', compact('products', 'categories', 'brands'));
    }
}
