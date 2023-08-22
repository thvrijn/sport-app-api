<?php

namespace Tests\Feature;

use App\Models\Workout;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WorkoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_workout_index(): void
    {
        $this->actingAsAuth();

        $workouts = Workout::factory(3)->create();

        $this->getJson(route('workouts.index'))
            ->assertStatus(200)
            ->assertJson([
                'data' => $workouts->map->only('id')->toArray(),
            ]);
    }
}
