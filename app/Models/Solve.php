<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solve extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'solves';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id_user',
        'id_chall',
        'user_flag',
        'created_at',
        'status',
    ];

    // Menghapus kolom timestamps yang tidak digunakan
    public $timestamps = false;

    // Cast kolom created_at menjadi objek tanggal
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
