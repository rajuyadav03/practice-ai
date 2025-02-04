<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function verifyAdmin(Request $request){
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credential)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
