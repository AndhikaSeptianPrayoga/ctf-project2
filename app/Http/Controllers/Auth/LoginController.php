<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $hashedPassword = md5($request->password);

        $user = DB::table('users')
            ->where('username', $request->username)
            ->where('password', $hashedPassword)
            ->first();

        if ($user) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['username'] = $user->username;
            $_SESSION['role'] = $user->role;
            $_SESSION['file'] = $user->file;
            $_SESSION['id_user'] = $user->id_user;

            Log::info('User logged in: ' . $user->username);

            if ($user->role == 0) {
                return redirect('/home-user');
            } elseif ($user->role == 1) {
                return redirect('/home-admin');
            }
        } else {
            Log::warning('Login failed for username: ' . $request->username);
            return back()->withErrors(['username' => 'Invalid credentials.']);
        }
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->banned) {
            Auth::logout();
            return redirect('/login')->withErrors(['Your account has been banned.']);
        }
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }
        return redirect('/login');
    }
}
