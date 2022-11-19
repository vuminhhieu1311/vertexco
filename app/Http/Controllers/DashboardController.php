<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ordersCount = Order::count();
        $customersCount = User::count();
        $orders = Order::with('user')->latest()->take(15)->get();
        $users = User::take(6)->get();

        return view('dashboard', compact('ordersCount', 'customersCount', 'orders', 'users'));
    }
}
