<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;
use App\Models\Solve;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ChallengeController extends Controller
{
    public function index(Request $request)
    {
        // Ambil input pencarian
        $search = $request->input('search');

    // Query untuk mengambil data dari tabel challenges, gabungkan dengan category, dan hitung jumlah solves
    $query = Challenge::select('challenges.id_chall', 'challenges.title', 'category.category', 'challenges.poin', \DB::raw('COUNT(solves.id_solve) as solve_count'))
        ->leftJoin('solves', 'challenges.id_chall', '=', 'solves.id_chall')
        ->leftJoin('category', 'challenges.id_category', '=', 'category.id_category')
        ->groupBy('challenges.id_chall', 'challenges.title', 'category.category', 'challenges.poin');

    // Tambahkan kondisi pencarian jika ada input
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('challenges.title', 'LIKE', "%{$search}%")
              ->orWhere('category.category', 'LIKE', "%{$search}%");
        });
    }

    $challenges = $query->get();

    // Kirim data ke view 'all-challenge'
    return view('all-challenge', compact('challenges', 'search'));
    }

    public function show($id)
    {
        // Ambil detail challenge berdasarkan id
        $challenge = Challenge::select('challenges.*', 'category.category')
            ->leftJoin('category', 'challenges.id_category', '=', 'category.id_category')
            ->where('challenges.id_chall', $id)
            ->firstOrFail();

        // Ambil recent solvers untuk challenge ini
        $solvers = Solve::select('solves.*', 'users.username', 'challenges.title as challenge_title')
            ->join('users', 'solves.id_user', '=', 'users.id_user')
            ->join('challenges', 'solves.id_chall', '=', 'challenges.id_chall')
            ->where('solves.id_chall', $id)
            ->where('solves.status', 1)
            ->orderBy('solves.created_at', 'asc')
            ->get();

        // Kirim data ke view 'challenge-detail'
        return view('challenge-detail', compact('challenge', 'solvers'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'category' => 'required|integer',
            'description' => 'required|string',
            'flag' => 'required|string|max:50',
            'points' => 'required|integer',
            'image' => 'nullable|image|max:2048',
        ]);

        $challenge = new Challenge();
        $challenge->title = $request->title;
        $challenge->id_category = $request->category;
        $challenge->descript = $request->description;
        $challenge->flag = $request->flag;
        $challenge->poin = $request->points;
        $challenge->status = 1; // Assuming status is active by default

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('challenges', 'public');
            $challenge->image = $imagePath;
        }

        $challenge->save();

        return redirect()->route('admin-challenge')->with('success', 'Challenge added successfully!');
    }
    public function showChallenges()
    {
        // Fetch challenges from the database
        $challenges = Challenge::all();

        // Pass the challenges to the view
        return view('admin-add-challenge', ['challenges' => $challenges]);
    }

    public function submitFlag(Request $request)
    {
        // Start the session
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Get the user flag and challenge ID from the request
        $userFlag = $request->input('user_flag');
        $challengeId = $request->input('id_chall');

        // Get the correct flag from the database
        $correctFlag = DB::table('challenges')->where('id_chall', $challengeId)->value('flag');

        // Determine the status (1 for correct, 0 for incorrect)
        $status = ($userFlag == $correctFlag) ? 1 : 0;

        // Insert into the solves table
        DB::table('solves')->insert([
            'id_user' => $_SESSION['id_user'], // Use PHP session
            'id_chall' => $challengeId,
            'user_flag' => $userFlag,
            'created_at' => now(),
            'status' => $status,
        ]);

        // Redirect back with success or error message
        if ($status) {
            return redirect()->back()->with('success', 'Flag correct!');
        } else {
            return redirect()->back()->with('error', 'Flag incorrect!');
        }
    }
}
