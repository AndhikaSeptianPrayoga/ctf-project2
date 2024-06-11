<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category'; // Nama tabel di database

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        // tambahkan kolom lain yang sesuai dengan struktur tabel categories di database Anda
    ];

    // Relasi dengan tabel Challenge, satu kategori bisa memiliki banyak challenge
    public function challenges()
    {
        return $this->hasMany(Challenge::class, 'id_category');
    }
}
