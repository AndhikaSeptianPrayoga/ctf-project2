<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

       
            $user = Auth::user();

           
            if ($user->role == 1) {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/user');
            }
        }

        return back()->with('loginError', 'Login gagal!');
    }
}