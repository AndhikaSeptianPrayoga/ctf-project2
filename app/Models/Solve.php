<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solve extends Model
{
    protected $table = 'solves'; // Ensure this matches your database table name

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Ensure 'id_user' is the correct foreign key
    }

    public function challenge()
    {
        return $this->belongsTo(Challenge::class, 'id_chall'); // Ensure 'id_chall' is the correct foreign key
    }

    // Define fillable attributes
    protected $fillable = [
        // Add the column names that can be mass-assigned
    ];
}