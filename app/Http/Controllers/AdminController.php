<?php

// app/Http/Controllers/AdminController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Solve;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function storeChallenge(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'category' => 'required|integer',
            'flag' => 'required|string|max:50',
            'points' => 'required|integer',
        ]);

        DB::table('challenges')->insert([
            'title' => $request->title,
            'descript' => $request->description,
            'id_category' => $request->category,
            'flag' => $request->flag,
            'poin' => $request->points,
            'status' => 1, // Assuming 1 means active
        ]);

        return redirect()->back()->with('success', 'Challenge added successfully!');
    }

    public function banUser($id_user)
    {
        $user = User::where('id_user', $id_user)->first();
        if ($user) {
            $user->banned = true;
            $user->save();
            return redirect()->back()->with('success', 'User has been banned.');
        }
        return redirect()->back()->withErrors('User not found.');
    }

    public function unbanUser($id_user)
    {
        $user = User::where('id_user', $id_user)->first();
        if ($user) {
            $user->banned = false;
            $user->save();
            return redirect()->back()->with('success', 'User has been unbanned.');
        }
        return redirect()->back()->withErrors('User not found.');
    }
}
