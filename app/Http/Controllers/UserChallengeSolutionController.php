<?php

namespace App\Http\Controllers;
use App\Models\UserChallengeSolution;

class UserChallengeSolutionController extends Controller
{
    public function showSolutions()
    {
        $solutions = UserChallengeSolution::all();
        return view('views', compact('solutions'));
    }

    
}
