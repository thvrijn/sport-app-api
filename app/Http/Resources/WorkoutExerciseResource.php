<?php

namespace App\Http\Resources;

use App\Models\WorkoutExercise;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkoutExerciseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var WorkoutExercise $this */

        return [
            'exercise' => $this->exercise,
            'details' => $this->details
        ];
    }
}
