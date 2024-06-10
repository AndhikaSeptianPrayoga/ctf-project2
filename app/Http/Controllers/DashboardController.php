<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use App\Models\Solve;
use App\Models\Challenge;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalNotifications = Notification::count();
        $totalSolves = Solve::where('status', 1)->count();
        $totalChallenges = Challenge::count();

       
        $recentSolves = Solve::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();

        $users = User::all();


        return view('dashboard', [
            'totalUsers' => $totalUsers,
            'totalNotifications' => $totalNotifications,
            'totalSolves' => $totalSolves,
            'totalChallenges' => $totalChallenges,
            'recentSolves' => $recentSolves, 
            'users' => $users,
        ]);
    }
}
