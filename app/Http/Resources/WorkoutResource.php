<?php

namespace App\Http\Resources;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkoutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Workout $this */

        return [
            'id' => $this->id,
            'name' => $this->name,
            'label' => $this->label,
            'exercises' => $this->exercises
        ];
    }
}
