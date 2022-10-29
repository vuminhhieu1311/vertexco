<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Enums\ProductStatus;
use App\Models\Order;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * @throws \Exception
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            Auth::user()->update([
                'name' => $request->name,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
            ]);

            $order = Auth::user()->orders()->create([
                'status' => OrderStatus::PENDING,
                'total' => Cart::total(),
                'delivery_address' => $request->address,
                'note' => $request->note,
            ]);

            foreach (Cart::content() as $item) {
                $order->products()->attach($item->id, ['quantity' => $item->qty]);
            }

            DB::commit();

            return redirect()->route('home')
                ->with('order_success', __('messages.order_successfully'));
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
