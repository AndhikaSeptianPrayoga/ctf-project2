<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solve extends Model
{
    protected $table = 'solves'; // Sesuaikan dengan nama tabel di database

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Sesuaikan dengan nama kolom yang digunakan sebagai kunci asing
    }

    public function challenge()
    {
        return $this->belongsTo(Challenge::class, 'id_chall');
    }

    // Tentukan atribut-atribut yang dapat diisi
    protected $fillable = [
        // Masukkan nama kolom yang sesuai di sini
    ];
}