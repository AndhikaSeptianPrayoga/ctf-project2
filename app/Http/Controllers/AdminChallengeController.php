<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;

class AdminChallengeController extends Controller
{
    public function index()
    {
        // Fetch all challenges from the database
        $challenges = Challenge::all();
        
        // Pass the challenges data to the view
        return view('admin-challenge', compact('challenges'));
    }

    public function destroy($id)
    {
        // Find the challenge by ID and delete it
        $challenge = Challenge::findOrFail($id);
        $challenge->delete();

        // Redirect back to the challenges list with a success message
        return redirect()->route('admin-challenge.index')->with('success', 'Challenge deleted successfully');
    }
}