<?php

namespace Database\Seeders;

use App\Models\Motor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motors = [
            [
                'brand' => 'Yamaha',
                'model' => 'NMAX 155',
                'year' => 2020,
                'license_plate' => 'B 1234 XYZ',
                'status' => 'available',
                'price_per_day' => 150000.00
            ],
            [
                'brand' => 'Honda',
                'model' => 'PCX 160',
                'year' => 2021,
                'license_plate' => 'B 5678 ABC',
                'status' => 'available',
                'price_per_day' => 170000.00
            ],
            [
                'brand' => 'Suzuki',
                'model' => 'Burgman Street 125',
                'year' => 2019,
                'license_plate' => 'B 9012 DEF',
                'status' => 'available',
                'price_per_day' => 130000.00
            ]
        ];

        foreach ($motors as $motor) {
            Motor::create($motor);
        }
    }
}
