<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $ordersCount = Order::count();
        $customersCount = User::count();
        $orders = Order::with('user')
            ->whereStatus(OrderStatus::PENDING)
            ->latest()->take(15)->get();
        $users = User::take(6)->get();
        $products = Product::withCount('orders')
            ->orderBy('orders_count', 'desc')
            ->having('orders_count', '!=', 0)
            ->take(15)->get();

        return view('dashboard', compact('ordersCount', 'customersCount', 'orders', 'users', 'products'));
    }

    public function sales()
    {
        $months = ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10', 'T11', 'T12'];
        $data = [];

        foreach ($months as $key => $value) {
            $total = (int) Order::whereYear('created_at', now()->year)
                ->whereMonth('created_at', $key + 1)
                ->select([DB::raw("SUM(total) as total")])
                ->first()?->total;

            $data[] = $total;

        }

        return response()->json(compact('months', 'data'));
    }
}
