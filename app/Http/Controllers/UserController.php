<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    public function updateLanguage($lang)
    {
        if (!in_array($lang, ['en', 'vi'])) {
            abort(400);
        }

        App::setLocale($lang);

        return redirect()->back();
    }
}
