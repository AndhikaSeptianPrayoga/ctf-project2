<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solve;
use App\Models\User;

class SolverController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel solves dengan status 1 dan gabungkan dengan tabel users
        $solvers = Solve::select('solves.*', 'users.username')
            ->join('users', 'solves.id_user', '=', 'users.id_user')
            ->where('solves.status', 1)
            ->orderBy('solves.created_at', 'desc')
            ->get();

        // Kirim data ke view 'solvers.index'
        return view('test-user', compact('solvers'));
    }
}
