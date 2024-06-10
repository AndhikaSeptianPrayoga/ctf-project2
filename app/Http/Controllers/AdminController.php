<?php

// app/Http/Controllers/AdminController.php
   namespace App\Http\Controllers;

   use Illuminate\Support\Facades\DB;
   use App\Models\Solve;

   class AdminController extends Controller
   {
    public function showSolvedChallenges()
    {
        $solvedChallenges = DB::table('solves')
            ->join('users', 'solves.id_user', '=', 'users.id_user')
            ->join('challenges', 'solves.id_chall', '=', 'challenges.id_chall')
            ->select('solves.*', 'users.username', 'challenges.title as challenge_title')
            ->orderBy('solves.created_at', 'desc')
            ->get();

            return view('admin-solved', compact('solvedChallenges'));
    }
   }