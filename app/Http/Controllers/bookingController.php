<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookings;
use App\Models\Category;
use App\Models\product;
use DB;

class bookingController extends Controller
{
    public function index(){
        return view('frontend.booking');
    }

    public function store(Request $request){

        $request->validate([
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|digits:10',
            'address' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'problem_description' => 'required|string',
        ]);

        


       $data=[
            'full_name' => $request->full_name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'date' => $request->date,
            'time' => $request->time,
            'problem_description' => $request->problem_description,
        ];
        bookings::insert($data);
        return redirect()->route('home')->with('success', 'Booking created successfully.');
    }

    
}
