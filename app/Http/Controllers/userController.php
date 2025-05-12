<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        // Validate the request
        $request->validate([
            'fname' => 'required|string|min:2|max:50',
            'lname'  => 'required|string|min:2|max:50',
            'email' => ['required', 'email', 'unique:users,email', 'regex:/^[a-zA-Z][a-zA-Z0-9._%+-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'password' => ['required','min:6','regex:/^(?=.*[A-Z])(?=.*[\W_]).+$/'],

        ]);

        // Check if the user already exists

        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'Email already exists!']);
        }

        // Create new user
        $user = User::insert([
            'first_name' => $request->fname,
            'last_name'  => $request->lname,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        // // Log the user in
        // Auth::login($user);

        // Redirect with success message
        return redirect()->route('frontend.login')->with('success', 'Signup successful!');
    }

    //For login
    public function checkLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12' 
        ]);

        $user = User::where('email',$request->email)->first();
        // dd($user);
        if($user){
            if(Hash::check($request->password, $user->password)){
                Auth::login($user);

                session([
                'user_id' => $user->id,
                'is_authenticated' => true,
            ]);
                //return redirect()->route('dashboard');
            }else{
                $request->session()->flash('failed', 'Please enter correct password');
            }
        }else{
            $request->session()->flash('failed', 'User not found!');
        }
        return redirect()->route('home')->with('success', 'login successful!');


    }

    public function logout(){
       if( Auth::check()){
        Auth::logout();
       }
       return redirect()->route('frontend.login')->with('success', 'logout successful!');

    }
}
