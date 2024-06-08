<?php

namespace App\Http\Controllers;

use App\Models\UserChallengeSolution;

class ChallengeController extends Controller
{
    public function getRanking()
    {
        
        $rankings = UserChallengeSolution::select('id_user', 'username') 
            ->selectRaw('SUM(total_points) as total_points')
            ->groupBy('id_user', 'username') 
            ->orderByDesc('total_points') 
            ->with('user')
            ->get();

    
        return view('scoreboard-user', ['rankings' => $rankings]);
    }
}
