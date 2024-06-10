<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notification';

    protected $primaryKey = 'id_notif';

    protected $fillable = [
        'title',
        'description',
        'status'
    ];

    public $timestamps = false; // Tambahkan baris ini untuk menonaktifkan timestamps
}
