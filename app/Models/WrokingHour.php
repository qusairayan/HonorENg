<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WrokingHour extends Model
{
    use HasFactory;
    protected $table = 'working_hours';
     

    protected $fillable = [
        'day',
        'time_from',
        'time_to',
        'off_day'
    ];
}

