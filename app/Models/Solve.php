<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solve extends Model

{
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Sesuaikan dengan nama kolom yang digunakan sebagai kunci asing
    }
    protected $table = 'solves'; // Sesuaikan dengan nama tabel di database

    // Tentukan atribut-atribut yang dapat diisi
    protected $fillable = [
        // Masukkan nama kolom yang sesuai di sini
    ];
}
