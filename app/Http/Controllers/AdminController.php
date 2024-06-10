<?php

// app/Http/Controllers/AdminController.php
   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Models\Solve;

   class AdminController extends Controller
   {
       public function solved()
       {
           $solves = Solve::with(['user', 'challenge'])->get();
           return view('admin-solved', compact('solves'));
       }
   }