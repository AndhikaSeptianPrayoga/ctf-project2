<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

        // Hash the input password using MD5
        $hashedPassword = md5($request->password);

        $user = DB::table('users')
            ->where('username', $request->username)
            ->where('password', $hashedPassword)
            ->first();

        if ($user) {
            // Check if session is active
            if (session_status() === PHP_SESSION_ACTIVE) {
                // Destroy the session if it's active
                if (isset($_SESSION['role']) && ($_SESSION['role'] == 0 || $_SESSION['role'] == 1)) {
                    session_destroy();
                }
            }

            session_start();
            $_SESSION['username'] = $user->username;
            $_SESSION['role'] = $user->role;

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

    public function logout()
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }
        return redirect('/login');
    }
}
