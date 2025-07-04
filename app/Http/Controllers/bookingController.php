<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookings;
use App\Models\Category;
use App\Models\product;
use DB;
use Illuminate\Support\Facades\Auth;

class bookingController extends Controller
{

    public function index($id){
        
        if (!Auth::check()) {
        session(['url.intended' => url()->current()]);
        return redirect()->route('frontend.login');
        }
        $product = product::find($id);
        
        return view('frontend.booking',compact('product'));
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
            'user_id' => Auth::id()
        ];
        bookings::insert($data);
        return redirect()->route('home')->with('success', 'Booking created successfully.');
    }

 public function bookingDetail()
    {
        $data['booking'] = bookings::all(); 
        return view('backend.booking.bookingStatus', $data);
    }

    // Store booking in 'booking' table after edit
    public function bookingstore(Request $request)
    {
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

        booking::insert($data); 
        return redirect()->route('booking.bookingStatus'); 
    }

    public function delete($id)
    {
        if (!$id) {
            return redirect()->back();
        }

        $booking = bookings::find($id); 

        if ($booking) {
            $booking->delete();
        }

        return redirect()->back();
    }

     // Show edit form for specific booking
    public function edit($id)
    {
        if (!$id) {
            return redirect()->back();
        }

        $booking = bookings::find($id); 

        if ($booking) {
            return view('backend.booking.editbooking', compact('booking')); 
        }

        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        if (!$id) {
            return redirect()->back();
        }

        $booking = bookings::find($id); 

        if ($booking) {
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

            $booking->update($data); 
        }

        return redirect()->route('booking.bookingStatus');
    }


    public function front(){
       $bookings = Auth::user()->bookings()->with('product.price')->get();;
    
       return view('frontend.mybookings', compact('bookings'));
    }





    
    
}
