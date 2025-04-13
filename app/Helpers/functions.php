<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    function setting($key = null, $default = null) {
        static $settings = null;

        if ($settings === null) {
            $settings = Setting::first();
        }

        if ($key === null) {
            return $settings;
        }

        return $settings?->$key ?? $default;
    }
}
