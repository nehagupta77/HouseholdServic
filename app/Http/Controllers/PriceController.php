<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\product;

class PriceController extends Controller
{
    // Show all products
    // public function index()
    // {
    //     $data['products'] = Product::with('category')->get();//join
    //     $data['price'] = Price::where('status',1)->get();
    //     // dd($data);
    //     return view('backend.pricing.index', $data);
    // }

    public function index()
    {
        $data['prices'] = Price::with('product')->get();//join
        $data['products'] = product::where('status',1)->get();
        // dd($data);
        return view('backend.pricing.index', $data);
    }

    // Show the form for creating a new product
    // public function create()
    // {
    //     $data['price'] = Price::where('status',1)->get();
    //     return view('backend.pricing.create', $data);
    // }

    public function create()
    {
        $data['products'] = product::all();
        // dd($data);
        return view('backend.pricing.create', $data);
    }

    

    // Store a newly created product
    public function store(Request $request)
    {
        // dd($request->all());
        
        $request->validate([
            'product_id' => 'required|exists:product,id',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric'
        ]);

        // $image_name = null;
        // if ($request->hasFile('image')) {
        //     $image_name = time() . rand(0, 1000000) . '.' . $request->image->getClientOriginalExtension();
        //     $request->image->move(public_path('uploads'), $image_name);
        // }
        $data = [
            'product_id' => $request->product_id,
            'price' => $request->price,
            'discount' => $request->discount
        ];
        // dd($data);
        Price::insert($data);
        return redirect()->route('pricing.index');
    }

    // Show the form for editing a product
    public function edit($id){

        if(!$id){
            return redirect()->back();
        }

        $price = Price::find($id);

        if($price){
            $data['price'] = $price;
            return view('backend.pricing.edit',$data);
        }

        return redirect()->back();

    }


    public function update( $id, Request $request){

        if(!$id){
            return redirect()->back();
        }

        $price = Price::find($id);


        if($price){

            $request->validate([
                'price' => 'required',
                'discount' => 'required'
            ]);
    
            // $image_name = null;
    
            // if($request->image && $request->hasFile('image')){
                
            //     if($product->image){
            //         $filepath = public_path().'/uploads/'. $product->image;

            //         if(file_exists($filepath))
            //         {
            //             unlink($filepath);
            //         }
            //     }


            //     $file =  $request->image;
            //     $image_name =  time(). rand(0,1000000000). $file->getClientOriginalName();
            //     $path = public_path().'/uploads';
            //     $file->move($path, $image_name);
    
            // }
    
    
            $data =[
                'price' =>$request->price,
                'discount' => $request->discount
            ];
            
            // if(!empty($image_name)){
            //     $data['image'] = $image_name;
            // }
    
            Price::where('id', $id)->update($data);
            return redirect()->route('pricing.index');
        }

            return redirect()->route('pricing.index');  

    }

    // Delete the product
    public function delete($id){

        if(!$id){
            return redirect()->back();
        }

        $price = Price::find($id);//check in database
        if($price){
            $price->delete();
            return redirect()->back();
        }
        return redirect()->back();

    } 
}
