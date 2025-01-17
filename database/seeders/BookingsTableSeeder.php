<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Bookings;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookings::factory()
            ->count(10000)
            ->create()
            ->each(function ($booking) {
                // Mag create ug payment every booking
                $booking->payments()->create([
                    'amount' => rand(50, 500),
                    'payment_date' => now(),
                    'payment_status' => 'Paid'
                ]);
            });
    }
}

