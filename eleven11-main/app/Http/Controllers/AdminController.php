<?php

namespace App\Http\Controllers;
use Session;
use App\User;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function signUp(Request $request){
      
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
       
        if (Auth::attempt($credentials)) {
            if(auth()->user()->role_id==1){
                return redirect()->route('dashboard');
            }
        }
       
        Session::flash('error', 'Oops! You have entered invalid credentials');
   
        return redirect()->route('admin.login');
    }

}


