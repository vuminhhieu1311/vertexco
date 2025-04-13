<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();

        $data = $request->only(['title', 'google_verification_code', 'google_analytics']);

        $filePath = $setting?->favicon;
        if ($request->file('favicon')) {
            $filePath = optional($request->file('favicon'))->store('images', ['disk' => 'public_storage']);
        }
        $data['favicon'] = $filePath;

        if (!$setting) {
            Setting::create($data);
        } else {
            $setting->update($data);
        }

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }
}
