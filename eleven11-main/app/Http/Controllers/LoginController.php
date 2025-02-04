<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // Validate the request to ensure username and password are provided
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Map the form's username field to the email column in the database
        $credentials = [
            'email' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        // Attempt to authenticate the user using the provided credentials
        if (!Auth::attempt($credentials)) {
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        }

        // Authentication passed, retrieve the authenticated user
        $user = Auth::user();

        return $this->authenticated($request, $user);
    }

    private function authenticated($request, $user)
    {
        return redirect()->intended('/admin');
    }

    public function signup(Request $request)
    {
        $this->validate($request, [
            'username' =>  'required',
            'password' => 'required| min:8',
        ]);

        $user = new User();
        $user->name = "admin";
        $user->email = $request->input('username');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return redirect()->route('signup');
    }
}
