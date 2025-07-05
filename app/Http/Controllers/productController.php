<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Category;


class productController extends Controller
{
    // Show all products
    public function index()
    {
        $data['products'] = Product::with('category')->get();//join
        $data['categories'] = Category::where('status',1)->get();
        // dd($data);
        return view('backend.product.index', $data);
    }

    // Show the form for creating a new product
    public function create()
    {
        $data['categories'] = Category::where('status',1)->get();
        return view('backend.product.create', $data);
    }

    // Store a newly created product
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|mimes:jpg,bmp,png',
            'status' => 'required|in:0,1',
            'category' =>'required',
            'short_description' => 'nullable|string|max:255',  
            'details' => 'nullable|string',
        ]);

        $image_name = null;
        if ($request->hasFile('image')) {
            $image_name = time() . rand(0, 1000000) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $image_name);
        }
        $data = [
            'category_id' => $request->category,
            'name' => $request->name,
            'description' => $request->description,
           
            'image' => $image_name,
            'status' => $request->status,
            'short_description' => $request->short_description,
            'details'=>$request->details

        ];
        Product::insert($data);
        return redirect()->route('product.index');
    }

    // Show the form for editing a product
    public function edit($id){

        if(!$id){
            return redirect()->back();
        }

        $product = product::find($id);

        if($product){
            $data['product'] = $product;
            return view('backend.product.edit',$data);
        }

        return redirect()->back();

    }


    public function update( $id, Request $request){

        if(!$id){
            return redirect()->back();
        }

        $product = product::find($id);


        if($product){

            $request->validate([
                'name' => 'required',
                'status' => 'required',
                'description' => 'required',
                'short_description' => 'nullable|string|max:255',  
            'details' => 'nullable|string',
            ]);
    
            $image_name = null;
    
            if($request->image && $request->hasFile('image')){
                
                if($product->image){
                    $filepath = public_path().'/uploads/'. $product->image;

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
                'description' => $request->description,
                'Short_description' => $request->Short_description,
               'details'=>$request->details
            ];
            
            if(!empty($image_name)){
                $data['image'] = $image_name;
            }
    
            product::where('id', $id)->update($data);
            return redirect()->route('product.index');
        }

      return redirect()->route('product.index');  

    }

    // Delete the product
    public function delete($id){

        if(!$id){
            return redirect()->back();
        }

        $product = product::find($id);//check in database
        if($product){
            $product->delete();
            return redirect()->back();
        }
        return redirect()->back();

    }

    public function productDetails($id){
        if(!$id){
            return redirect()->back();
        }

        $data['product'] = product::with('category','price')->find($id);
        $data['categories'] = Category::where('status', 1)->get();
        $data['related_products'] = product::where('status', 1)->inRandomOrder()->get();

        if($data['product']){
            return view('frontend.service_detail',$data);
        }

        return redirect()->back();
    }
}
