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

    public function create(){
         return view('backend.category.create');
    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'image' =>'required|mimes:jpg,bmp,png',
            'status' => 'required'
        ]);

        $image_name = '';

        if($request->image && $request->hasFile('image')){
            $file =  $request->image;
            $image_name =  time(). rand(0,1000000000). $file->getClientOriginalName();
            $path = public_path().'/uploads';
            $file->move($path, $image_name);

        }


        $data =[
            'name' =>$request->name,
            'image' => $image_name,
            'status'=> $request->status ?? 0,
            'description' => $request->description
        ];

        Category::insert($data);
        return redirect()->route('category.index');
    }
}
