<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        return view('notification', compact('notifications'));
    }

    public function create()
    {
        return view('admin-notification');  
    }

   
   

    public function store(Request $request)
    {
       
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
      
        Notification::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => 0, 
        ]);
    
        
        return redirect()->route('notifications.index')->with('success', 'Notification created successfully.');
    }
    

}
