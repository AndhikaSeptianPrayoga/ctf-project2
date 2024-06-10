<?php

namespace App\Http\Controllers;
use App\Models\Notification; // Pastikan untuk mengimpor model Notification

class NotificationUserController extends Controller
{
    public function index()
    {
        // Ambil data notifikasi
        $notifications = Notification::all();

        // Kirim data notifikasi ke tampilan blade
        return view('notification-user', ['notifications' => $notifications]);
    }
}
