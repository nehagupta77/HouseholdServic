<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\product;

class PriceController extends Controller
{

    public function index()
    {
        $data['prices'] = Price::with('product')->get();//join
        $data['products'] = product::where('status',1)->get();
        // dd($data);
        return view('backend.pricing.index', $data);
    }

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
            $data['products'] = product::all();
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
    
            $data =[
                'price' =>$request->price,
                'discount' => $request->discount
            ];
            
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
