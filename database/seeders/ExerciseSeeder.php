<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_exercises = collect();

        foreach (Exercise::$DEFAULTS as $item) {
            $name = Str::slug($item);

            $exercise = Exercise::factory()->create([
                'name' => $name,
                'label' => $item,
                'user_id' => null
            ]);

            $default_exercises->add($exercise);
        }
    }
}
