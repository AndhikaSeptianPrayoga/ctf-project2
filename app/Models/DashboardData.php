<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DashboardData extends Model
{
    protected $table = 'dashboard_view'; 

    protected $fillable = [
        'total_users',
        'total_Notifications',
        'total_solves',
        'total_challenges',
       
    ];

    
}
