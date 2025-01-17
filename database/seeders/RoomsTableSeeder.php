<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Rooms;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rooms::factory()->count(1000)->create(); // Create 20 rooms
    }
}
