<?php

namespace Database\Factories;

use App\Models\Payments;
use App\Models\Bookings;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentsFactory extends Factory
{
    protected $model = Payments::class;

    public function definition()
    {
        return [
            'booking_id' => Bookings::factory(),
            'amount' => $this->faker->randomFloat(2, 50, 500),
            'payment_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'payment_status' => $this->faker->randomElement(['Paid', 'Failed']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

