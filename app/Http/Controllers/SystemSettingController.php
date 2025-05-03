<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Services\SiteSettingService;


class SystemSettingController extends Controller
{
    public function create()
    {
        $settings = SiteSetting::pluck('value', 'key')->toArray();
        return view('backend.settings.system', compact('settings'));
    }

    public function store(Request $request, SiteSettingService $settingsService)
        {
            $data = $request->except('_token');

        foreach ($data as $key => $value) {
        
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $filename = $key . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('uploads');

            
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }

            
                $file->move($destinationPath, $filename);

            
                $value = '/uploads/' . $filename;
            }

            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingsService->refresh();

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
