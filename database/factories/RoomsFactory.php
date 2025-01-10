<?php

namespace Database\Factories;

use App\Models\Rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomsFactory extends Factory
{
    protected $model = Rooms::class;

    public function definition()
    {
        return [
            'room_name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'capacity' => $this->faker->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
