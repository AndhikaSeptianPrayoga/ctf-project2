<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;
use App\Models\Solve; // Don't forget to include the Solve model

class AdminController extends Controller
{
    public function index()
    {
        $challenges = Challenge::all();
        return view('admin-challenge', compact('challenges'));
    }

    public function destroy($id_user)
    {
        $challenge = Challenge::findOrFail($id_user);
        $challenge->delete();
        return redirect()->route('admin-challenge.index')->with('success', 'Challenge deleted successfully');
    }

    public function solved()
    {
        $solves = Solve::with(['user', 'challenge'])->get();
        return view('admin-solved', compact('solves'));
    }
}
