<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use willvincent\Rateable\Rating;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::where('rateable_type', Order::class)
            ->with('user', 'rateable')
            ->latest()->get();

        return view('rating.index', compact('ratings'));
    }
}
