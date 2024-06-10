<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ScoreboardController extends Controller
{
    public function index()
    {
        $rankings = User::select('users.id_user', 'users.username', 
                DB::raw('SUM(challenges.poin) as total_points'))
            ->join('solves', 'users.id_user', '=', 'solves.id_user')
            ->join('challenges', 'solves.id_chall', '=', 'challenges.id_chall')
            ->where('solves.status', 1)
            ->groupBy('users.id_user', 'users.username')
            ->orderByDesc('total_points')
            ->get();

        return view('scoreboard-user', compact('rankings'));
    }
}