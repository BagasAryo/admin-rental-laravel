<?php

namespace Database\Seeders;

use App\Models\Rental;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role', 'user')->get();

        $rentals = [
            [
                'user_id' => $users[0]->id,
                'motor_id' => 1,
                'start_date' => now(),
                'end_date' => now()->addDays(1),
            ],
            [
                'user_id' => $users[1]->id,
                'motor_id' => 2,
                'start_date' => now()->addDays(1),
                'end_date' => now()->addDays(3),
            ],
        ];

        foreach ($rentals as $rental) {
            Rental::create($rental);
        }
    }
}
