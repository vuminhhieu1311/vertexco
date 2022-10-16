<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateLanguage($lang)
    {
        Auth::user()->update([
            'lang' => $lang,
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $users = User::where('is_admin', true)->latest()->get();

        return view('user.index', compact('users'));
    }
}
