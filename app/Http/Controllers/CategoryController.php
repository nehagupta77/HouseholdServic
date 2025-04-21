<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public  function index(){
        $data['categories'] = Category::where('status',1)->get();
        return view('backend.category.index', $data);
    }
}
