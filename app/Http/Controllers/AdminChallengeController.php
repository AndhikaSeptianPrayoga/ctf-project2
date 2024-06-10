<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Challenge;
use App\Models\User; // Pastikan untuk mengimpor model User
use App\Models\Solve; // Pastikan untuk mengimpor model Solve

class AdminChallengeController extends Controller
{
    public function create()
    {
        // Ambil semua kategori
        $categories = Category::all();
        // Kembalikan view dengan data kategori
        return view('admin-add-challenge', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:50',
            'category' => 'required|integer|exists:categories,id_category',
            'description' => 'required|string',
            'flag' => 'required|string|max:50',
            'points' => 'required|integer',
            'image' => 'nullable|image'
        ]);

        // Buat instance Challenge baru
        $challenge = new Challenge();
        $challenge->title = $request->title;
        $challenge->id_category = $request->category;
        $challenge->descript = $request->description;
        $challenge->flag = $request->flag;
        $challenge->poin = $request->points;
        $challenge->status = 1; // Anggap status 1 berarti aktif

        // Jika ada file gambar, simpan dan set path-nya
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $challenge->image = $path;
        }

        // Simpan Challenge ke database
        $challenge->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin-challenge.index')->with('success', 'Challenge added successfully');
    }

    public function index()
    {
        // Ambil data dashboard
        $dashboardData = [
            'total_users' => User::count(),
            'total_solves' => Solve::count(),
            'total_challenges' => Challenge::count(),
        ];

        // Kembalikan view dengan data dashboard
        return view('index')->with('dashboardData', (object) $dashboardData);
    }
}
