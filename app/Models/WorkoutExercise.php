<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property Exercise|null $exercise
 * @property array details
 */
class WorkoutExercise extends Model
{
    use HasFactory;

    protected $casts = [
        'details' => 'array'
    ];

    /**
     * @return BelongsTo
     */
    public function Exercise(): BelongsTo
    {
        return $this->belongsTo(Exercise::class, 'exercise_id', 'id');
    }
}
