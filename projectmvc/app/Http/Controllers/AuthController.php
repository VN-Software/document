<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'password.required' => 'Password is required',
        ]);
        $useInput = $request->only("email", "password");

        if (Auth::attempt($useInput)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            "email" => "Email or password is incorrect",
        ]);
    }

    public function getAll(Request $request)
    {
        return response()->json("dashboard");
    }
}
