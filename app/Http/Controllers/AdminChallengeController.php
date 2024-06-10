<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Challenge;

class AdminChallengeController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('admin-add-challenge', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'category' => 'required|integer|exists:categories,id_category',
            'description' => 'required|string',
            'flag' => 'required|string|max:50',
            'points' => 'required|integer',
            'image' => 'nullable|image'
        ]);

        $challenge = new Challenge();
        $challenge->title = $request->title;
        $challenge->id_category = $request->category;
        $challenge->descript = $request->description;
        $challenge->flag = $request->flag;
        $challenge->poin = $request->points;
        $challenge->status = 1; // Assuming status 1 means active

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $challenge->image = $path;
        }

        $challenge->save();

        return redirect()->route('admin-challenge.index')->with('success', 'Challenge added successfully');
    }

    public function index()
{
    // Fetch the dashboard data
    $dashboardData = [
        'total_users' => User::count(),
        'total_solves' => Solve::count(),
        'total_challenges' => Challenge::count(),
    ];

    // Return the view with the dashboard data
    return view('index')->with('dashboardData', (object) $dashboardData);
}
}