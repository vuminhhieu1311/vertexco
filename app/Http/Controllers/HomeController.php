<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function services()
    {
        return view('guest.services');
    }

    public function contact()
    {
        return view('guest.contact');
    }

    public function news()
    {
        return view('guest.news');
    }

    public function newsDetail($slug)
    {
        return view('guest.news_detail');
    }
}
