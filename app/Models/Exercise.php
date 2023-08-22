<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property Int id
 */
class Exercise extends Model
{
    public static array $DEFAULTS = [
        'Bench Press',
        'Squats',
        'Deadlift',
        'Lat pulldown',
        'Bicep Curl',
    ];

    use HasFactory;
}
