<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property Number id
 * @property String name
 * @property String label
 * @property Collection<Exercise>|null $exercises
 */
class Workout extends Model
{
    use HasFactory;

    public function Exercises(): HasMany
    {
        return $this->hasMany(WorkoutExercise::class, 'workout_id', 'id');
    }
}
