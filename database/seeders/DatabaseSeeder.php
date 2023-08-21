<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Workout;
use App\Models\WorkoutExercises;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        $workout_id = Workout::factory()->create([
            'name' => 'full-body-day-1',
            'label' => 'Full Body - Day 1',
            'user_id' => $user->id
        ]);

        WorkoutExercises::factory(5)->create([
            'workout_id' => $workout_id
        ]);
    }
}
