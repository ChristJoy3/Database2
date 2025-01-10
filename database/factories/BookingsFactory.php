<?php

namespace Database\Factories;

use App\Models\Bookings;
use App\Models\Users;
use App\Models\Rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingsFactory extends Factory
{
    protected $model = Bookings::class;

    public function definition()
    {
        return [
            'user_id' => Users::factory(),
            'room_id' => Rooms::factory(),
            'booking_date' => $this->faker->date,
            'check_in' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'check_out' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
            'status' => $this->faker->randomElement(['Pending', 'Confirmed', 'Cancelled']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
