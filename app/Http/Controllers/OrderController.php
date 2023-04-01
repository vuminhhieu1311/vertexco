<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\ProductVariant;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::with('user')
            ->latest()
            ->when($request->query('from') && $request->query('to'), function ($query) {
                return $query->whereDate('created_at', '>=', request('from'))
                    ->whereDate('created_at', '<=', request('to'));
            })
            ->when($request->query('keyword'), function ($query) {
                return $query->where(function ($q) {
                    return $q->whereHas('user', function ($q1) {
                        return $q1->where('users.name', 'LIKE', '%'.request('keyword').'%');
                    })
                        ->orWhere('code', 'LIKE', '%'.request('keyword').'%')
                        ->orWhere('note', 'LIKE', '%'.request('keyword').'%');
                });
            })
            ->when($request->query('status'), function ($query) {
                return $query->where('status', request('status'));
            })
            ->when($request->query('total'), function ($query) {
                $total = request('total');
                if ($total === 'under 500') {
                    return $query->where('total', '<', 500000);
                }
                if ($total === 'from 500 to 1000') {
                    return $query->where('total', '>=', 500000)
                        ->where('total', '<=', 1000000);
                }
                if ($total === 'from 1000 to 2000') {
                    return $query->where('total', '>=', 1000000)
                        ->where('total', '<=', 2000000);
                }
                if ($total === 'from 2000 to 3000') {
                    return $query->where('total', '>=', 2000000)
                        ->where('total', '<=', 3000000);
                }
                if ($total === 'from 3000 to 5000') {
                    return $query->where('total', '>=', 3000000)
                        ->where('total', '<=', 5000000);
                }
                if ($total === 'from 5000') {
                    return $query->where('total', '>=', 5000000);
                }

                return null;
            })
            ->get();

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
                $productVariant = ProductVariant::find($item->options->variant_id);
                $quantity = $productVariant->quantity - $item->qty;
                $productVariant->quantity = $quantity;
                $productVariant->save();

                $order->products()->attach($item->id, [
                    'quantity' => $item->qty,
                    'price' => $item->price,
                    'product_variant_id' => $item->options->variant_id,
                ]);
            }

            Cart::destroy();

            DB::commit();

            alert()->success(__('messages.order_successfully'))
                ->showConfirmButton('OK', '#FF7B54')->autoClose(5000);

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

    public function update(Request $request, Order $order)
    {
        try {
            DB::beginTransaction();

            if ($request->status === OrderStatus::CANCELED) {
                foreach ($order->products as $product) {
                    $quantity = $product->quantity + $product->pivot->quantity;
                    $product->quantity = $quantity;
                    $product->save();
                }
            }

            $res = $order->update([
                'status' => $request->status,
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
        try {
            DB::beginTransaction();

            if ($order->status === OrderStatus::PENDING) {
                foreach ($order->productVariants as $product) {
                    $quantity = $product->quantity + $product->pivot->quantity;
                    $product->quantity = $quantity;
                    $product->save();
                }

                $order->update([
                    'status' => OrderStatus::CANCELED,
                ]);
            }

            DB::commit();

            return $order;
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }
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
