<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;


class SettingController extends Controller
{
    public function system()
    {
    $settings = SiteSetting::pluck('value', 'key')->toArray();
    return view('backend.setting.systemSetting', compact('settings'));
    }


}
