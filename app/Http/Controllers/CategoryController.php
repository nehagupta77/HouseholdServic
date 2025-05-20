<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;
use DB;
use App\Services\SiteSettingService;

class CategoryController extends Controller
{
    public  function index(){
        $data['categories'] = Category::all();
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

    public function delete($id){

        if(!$id){
            return redirect()->back();
        }

        $category = Category::find($id);//check in database
        if($category){
            $category->delete();
            return redirect()->back();
        }
        return redirect()->back();

    }

    public function edit($id){

        if(!$id){
            return redirect()->back();
        }

        $category = Category::find($id);

        if($category){
            $data['category'] = $category;
            return view('backend.category.edit',$data);
        }

        return redirect()->back();

    }


    public function update( $id, Request $request){

        if(!$id){
            return redirect()->back();
        }

        $category = Category::find($id);


        if($category){

            $request->validate([
                'name' => 'required',
                'status' => 'required'
            ]);
    
            $image_name = null;
    
            if($request->image && $request->hasFile('image')){
                
                if($category->image){
                    $filepath = public_path().'/uploads/'. $category->image;

                    if(file_exists($filepath))
                    {
                        unlink($filepath);
                    }
                }


                $file =  $request->image;
                $image_name =  time(). rand(0,1000000000). $file->getClientOriginalName();
                $path = public_path().'/uploads';
                $file->move($path, $image_name);
    
            }
    
    
            $data =[
                'name' =>$request->name,
                'status'=> $request->status ?? 0,
                'description' => $request->description
            ];
            
            if(!empty($image_name)){
                $data['image'] = $image_name;
            }
    
            Category::where('id', $id)->update($data);
            return redirect()->route('category.index');
        }

      return redirect()->route('category.index');  

    }

    public function categoryDetails($id){
        if(!$id){
            return redirect()->back();
        }

        $data['products'] = product::with('category','price')->where('category_id',$id)->get();
        $data['categories'] = Category::where('status', 1)-> take(4)->get();
        // dd($products);
        if($data['products']){
            return view('frontend.category_details',$data);
        }

        return redirect()->back();
    }

    public function search(Request $request)
    {
       
        $query = \DB::table('category');
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', '%' . $search . '%');
        }
        $data['categories'] = $query->orderBy('name')->get();
        $data['relatedCategories'] =  Category::where('status', 1)->inRandomOrder(5)->get();
        $settings = app(SiteSettingService::class);
        return view('frontend.index', $data)->with('globalSettings', $settings);;
    }


}
