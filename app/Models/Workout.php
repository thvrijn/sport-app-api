<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workout extends Model
{
    use HasFactory;

    public function Exercises(): HasMany
    {
        return $this->hasMany(WorkoutExercises::class, 'workout_id', 'id');
    }
}
