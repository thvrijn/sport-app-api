<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Exercise;
use App\Models\User;
use App\Models\Workout;
use App\Models\WorkoutExercise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Thomas',
            'email' => 'thvrijn2002@gmail.com',
            'password' => Hash::make('test')
        ]);

        $this->call(ExerciseSeeder::class);

        $exercises = Exercise::all();

        $workout_id = Workout::factory()->create([
            'name' => 'full-body-day-1',
            'label' => 'Full Body - Day 1',
            'user_id' => $user->id
        ]);

        foreach ($exercises as $exercise) {
            /** @var Exercise $exercise */

            WorkoutExercise::factory()->create([
                'workout_id' => $workout_id,
                'exercise_id' => $exercise->id,
                'details' => [
                    [
                        'weight' => 12,
                        'reps' => 3,
                    ],
                    [
                        'weight' => 12,
                        'reps' => 3,
                    ],
                    [
                        'weight' => 12,
                        'reps' => 3,
                    ]
                ]
            ]);
        }
    }
}
