<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function verifyUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required| min:8',
        ]);
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('user.dashboard');
        }else{
            return redirect()->route('login');
        }

    }

    private function authenticated($request, $user)
    {
        Auth::login($user, $request->get('remember'));
        return redirect()->route('user.dashboard');
    }

    public function addUser(RegistrationRequest $request)
    {
        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password)
        ];
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('user.dashboard');
    }

    public function dashboard()
    {
        return view('users.website.dashboard');
    }

    public function userLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
