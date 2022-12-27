<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')
            ->latest()->get();

        return view('order.index', compact('orders'));
    }

    /**
     * @throws \Exception
     */
    public function store(StoreOrderRequest $request)
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
                'tax' => Cart::tax(),
            ]);

            foreach (Cart::content() as $item) {
                $product = Product::find($item->id);
                $quantity = $product->quantity - 1;
                $product->quantity = $quantity;
                $product->save();

                $order->products()->attach($item->id, [
                    'quantity' => $item->qty,
                    'price' => $item->price,
                ]);
            }

            Cart::destroy();

            DB::commit();

            alert()->success(__('messages.order_successfully'))
                ->showConfirmButton('OK', '#6aaf08')->autoClose(5000);

            return redirect()->route('home');
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }
    }

    public function show(Order $order)
    {
        $order->rating = $order->ratings()->first();

        return view('order.show', compact('order'));
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        try {
            DB::beginTransaction();

            if ($request->status === OrderStatus::CANCELED) {
                foreach ($order->products as $product) {
                    $quantity = $product->quantity + 1;
                    $product->quantity = $quantity;
                    $product->save();
                }
            }

            $res = $order->update([
                'status' =>  $request->status,
            ]);

            DB::commit();

            return $res;
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }

    }

    public function destroy(Order $order)
    {
        if ($order->status === OrderStatus::PENDING) {
            $order->update([
                'status' => OrderStatus::CANCELED,
            ]);
        }

        return $order;
    }

    public function getOrderHistory()
    {
        $orders = Auth::user()->orders()->latest()->get();

        return view('customer.order_history', compact('orders'));
    }

    public function getOrderDetail(Order $order)
    {
        $order->rating = $order->ratings()->first();

        return view('customer.order_detail', compact('order'));
    }

    public function rateOrder(Request $request, Order $order)
    {
        $order->rate($request->rating, $request->comment);

        foreach ($order->products as $product) {
            $product->rate($request->rating, $request->comment);
        }

        return redirect()->back()->with('success', __('messages.successfully'));
    }
}
