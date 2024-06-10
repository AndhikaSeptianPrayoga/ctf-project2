<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Solve;
use App\Models\Challenge;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the dashboard data
        $dashboardData = [
            'total_users' => User::count(),
            'total_solves' => Solve::count(),
            'total_challenges' => Challenge::count(),
        ];

        // Return the view with the dashboard data
        return view('index')->with('dashboardData', (object) $dashboardData);
    }
}