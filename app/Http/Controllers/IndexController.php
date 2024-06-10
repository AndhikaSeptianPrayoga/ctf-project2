<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Solve;
use App\Models\Challenge;

class IndexController extends Controller
{
    public function index()
{
    // Misalnya, mengambil data dari model atau sumber data lainnya
    $totalUsers = User::count();
    $totalSolves = Solve::count();
    $totalChallenges = Challenge::count();

    // Kemudian kirim data tersebut ke view
    return view('index', [
        'dashboardData' => [
            'total_users' => $totalUsers,
            'total_solves' => $totalSolves,
            'total_challenges' => $totalChallenges,
        ],
    ]);
}

}
