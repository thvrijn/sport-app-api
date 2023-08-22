<?php

namespace App\Routes;

use App\Http\Controllers\WorkoutController;
use Illuminate\Support\Facades\Route;

class WorkoutRoute implements Routes
{
    public static function routes(): void
    {
        Route::get('/workouts', [WorkoutController::class, 'index'])->name('workouts.index');
    }
}
