<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $cart = Cart::content();

        return view('customer.cart', compact('cart'));
    }

    public function save(Request $request, Product $product)
    {
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => (int) $request->quantity,
            'price' => $product->price,
            'weight' => 1,
            'options' => [
                'avatar_url' => $product->avatar_url,
            ],
        ]);

        return redirect()->route('cart.show');
    }
}
