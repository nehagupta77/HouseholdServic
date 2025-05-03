<?php

namespace App\Services;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;

class SiteSettingService
{
    protected $settings;

    public function __construct()
    {
        $this->settings = Cache::rememberForever('site_settings', function () {
            return SiteSetting::pluck('value', 'key')->toArray();
        });
    }

    public function get($key, $default = null)
    {
        return $this->settings[$key] ?? $default;
    }

    public function all()
    {
        return $this->settings;
    }

    public function refresh()
    {
        Cache::forget('site_settings');
        $this->settings = SiteSetting::pluck('value', 'key')->toArray();
        Cache::forever('site_settings', $this->settings);
    }
}