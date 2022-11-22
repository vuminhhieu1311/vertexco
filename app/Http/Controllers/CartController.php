<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        return view('customer.cart');
    }

    public function save(Request $request, Product $product)
    {
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => (int) $request->quantity,
            'price' => $product->final_price,
            'weight' => 1,
            'options' => [
                'avatar_url' => $product->avatar_url,
            ],
        ]);

        Cart::setGlobalTax(8);

        return redirect()->route('cart.show');
    }

    public function update(Request $request, $id)
    {
        return Cart::update($id, (int) $request->quantity);
    }

    public function remove($id)
    {
        Cart::remove($id);

        return redirect()->route('cart.show');
    }

    public function store(Request $request, Product $product)
    {
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => (int) $request->quantity,
            'price' => $product->final_price,
            'weight' => 1,
            'options' => [
                'avatar_url' => $product->avatar_url,
            ],
        ]);

        Cart::setGlobalTax(8);

        return Cart::count();
    }
}
