<?php

namespace App\Http\Controllers;

use AmrShawky\LaravelCurrency\Facade\Currency;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $totalUSD = round(Currency::convert()
            ->from('VND')
            ->to('USD')
            ->amount(Cart::total())
            ->get(), 2);

        return view('customer.checkout', compact('totalUSD'));
    }
}
