<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $message = 'Hello, welcome to our website!';

        return view('Registration', [
            'title' => 'Registration',
            'message' => $message
        ]);
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
        ]);
        
        $validate['password'] = hash::make($validate['password']);
        User::create($validate);

        return redirect('/login')->with('success', 'Registrasi Berhasil!, silahkan login');
    }   
}
