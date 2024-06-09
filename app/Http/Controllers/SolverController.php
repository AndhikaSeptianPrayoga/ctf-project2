<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solve;
use App\Models\User;
use App\Models\Challenge;

class SolverController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel solves dengan status 1 dan gabungkan dengan tabel users dan challenges
        $solvers = Solve::select('solves.*', 'users.username', 'challenges.title as challenge_title')
            ->join('users', 'solves.id_user', '=', 'users.id_user')
            ->join('challenges', 'solves.id_chall', '=', 'challenges.id_chall')
            ->where('solves.status', 1)
            ->orderBy('solves.created_at', 'desc')
            ->get();

        // Kirim data ke view 'test-user'
        return view('test-user', compact('solvers'));
    }
}
