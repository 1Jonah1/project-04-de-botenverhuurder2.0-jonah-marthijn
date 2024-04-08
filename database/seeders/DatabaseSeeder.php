<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Boat;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

        for ($i = 1; $i <= 10; $i++) {
            Boat::create([
                'name' => 'Boat ' . $i,
                'discription' => 'Description for Boat ' . $i,
                'userid' => $i, // Assuming you have users already seeded
                'price_per_month' => rand(1000, 5000), // Generate random price
                'photo' => 'boat_' . $i . '.jpg', // Assuming you have images named boat_1.jpg, boat_2.jpg, etc.
            ]);
        }
    }
}
