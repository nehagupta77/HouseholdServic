<?php

namespace App\Http\Controllers;
use App\Models\user;

use Illuminate\Http\Request;

class userdetailscontroler extends Controller
{
    public function userdetail(){
        $data['user'] = user::all();
        return view('backend.userdetails.userdetail',$data );
    }



}


