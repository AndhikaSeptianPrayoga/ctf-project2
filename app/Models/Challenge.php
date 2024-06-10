<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    // Define the table if it's not the plural of the model name
    protected $table = 'challenges';

    // Define the primary key if it's not 'id'
    protected $primaryKey = 'id_chall';

    

    // Specify the fields that are mass assignable
    protected $fillable = [
        'title',
        'descript',
        'id_category',
        'flag',
        'poin',
        'status',
        'img-challenge'
    ];

    public function solves()
    {
        return $this->hasMany(Solve::class, 'id_chall');
    }
    
}