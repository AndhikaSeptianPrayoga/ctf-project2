<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        
        // Mengambil data dari database view
        $dashboardData = DB::table('dashboard_view')->first();

        // Kirim data ke view
        return view('index', compact('dashboardData'));
    }
}
