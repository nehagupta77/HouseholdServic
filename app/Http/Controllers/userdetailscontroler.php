<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class Userdetailscontroler extends Controller 
{
    //Show all users
    public function userdetail()
    {
        $data['users'] = User::all(); 
        return view('backend.userdetails.userdetail', $data);
    }

    

    // Store new user in 'users' table after edit
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email'
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email
        ];

        User::insert($data); 
        return redirect()->route('userdetails.userdetail'); 
    }

    // id s euser ko delete karne ke liye
    public function delete($id)
    {
        if (!$id) {
            return redirect()->back();
        }

        $user = User::find($id); 

        if ($user) {
            $user->delete();
        }

        return redirect()->back();
    }

    // Show edit form for specific user
    public function edit($id)
    {
        if (!$id) {
            return redirect()->back();
        }

        $user = User::find($id); 

        if ($user) {
            return view('backend.userdetails.edit', compact('user')); 
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        if (!$id) {
            return redirect()->back();
        }

        $user = User::find($id); 

        if ($user) {
            $request->validate([
                'first_name' => 'required',
                'last_name'  => 'required',
                'email'      => 'required|email'
            ]);

            $data = [
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'      => $request->email
            ];

            $user->update($data); // user update ko lagi (user table ma)
        }

        return redirect()->route('userdetails.userdetail');
    }
}
