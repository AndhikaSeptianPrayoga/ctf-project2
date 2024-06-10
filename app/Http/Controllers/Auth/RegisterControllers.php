<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterControllers extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:30|unique:users',
            'email' => 'required|string|email:dns|max:50|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Upload file
        $filePath = 'img/default-profile.png';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'img/' . $fileName;
            $file->move(public_path('img'), $fileName);
        }

        // Buat user baru
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => md5($request->password), // Gunakan MD5 untuk hashing password
            'file' => $filePath,
            'role' => 0,
        ]);

        // Redirect ke halaman login atau halaman lain sesuai kebutuhan
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }
}
