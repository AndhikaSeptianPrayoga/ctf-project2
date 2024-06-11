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
            ->where('solves.status', 1);

        // Tambahkan kondisi pencarian jika ada input
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('challenges.title', 'LIKE', "%{$search}%")
                  ->orWhere('category.category', 'LIKE', "%{$search}%");
            });
        }

        $challenges = $query->groupBy('challenges.id_chall', 'challenges.title', 'category.category', 'challenges.poin')
            ->get();

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
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $request->validate([
            'id_chall' => 'required|integer',
            'user_flag' => 'required|string|max:50',
        ]);

        $challenge = Challenge::find($request->id_chall);

        if (!$challenge) {
            return redirect()->back()->with('error', 'Challenge not found.');
        }

        $status = $request->user_flag === $challenge->flag ? 1 : 0;

        // Tambahkan log untuk debugging
        \Log::info('User ID: ' . ($_SESSION['id_user'] ?? 'not set'));
        \Log::info('Challenge ID: ' . $request->id_chall);
        \Log::info('User Flag: ' . $request->user_flag);
        \Log::info('Status: ' . $status);

        if (isset($_SESSION['id_user'])) {
            DB::table('solves')->insert([
                'id_user' => $_SESSION['id_user'],
                'id_chall' => $request->id_chall,
                'user_flag' => $request->user_flag,
                'created_at' => now(),
                'status' => $status,
            ]);

            if ($status === 1) {
                return redirect()->back()->with('success', 'Correct flag!');
            } else {
                return redirect()->back()->with('error', 'Incorrect flag.');
            }
        } else {
            return redirect()->back()->with('error', 'User ID not found in session.');
        }
    }
}
