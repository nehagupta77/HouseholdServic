<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\bookings;

class DashboardController extends Controller
{
   public function index()
   {
    
        $data ['products_count'] = product::count();
        $data ['bookings_count'] = bookings::count();
        // $data ['total_revenue'] = bookings::sum('total_price');
        // return view('backend.dashboard.index', $data);
       return view('dashboard',$data);
   }
}
