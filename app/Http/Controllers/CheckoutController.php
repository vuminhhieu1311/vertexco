<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $cart = Cart::content();
        $priceTotal = Cart::priceTotal();
        $subtotal = Cart::subtotal();
        $tax = Cart::tax();
        $total = Cart::total();

        return view('customer.checkout', compact(
            'cart',
            'priceTotal',
            'subtotal',
            'tax',
            'total',
        ));
    }
}
