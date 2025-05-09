<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\SiteSettingService;

class HomeController extends Controller
{
    public function index(){
        $data['categories'] = Category::where('status', 1)->get();
        $data['relatedCategories'] =  Category::where('status', 1)->inRandomOrder(5)->get();
        $settings = app(SiteSettingService::class);
        return view('frontend.index', $data)->with('globalSettings', $settings);
        
    }
}
