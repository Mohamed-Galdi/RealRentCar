<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'brand' => 'Toyota',
                'model' => 'Camry',
                'engine' => '2.5L',
                'price_per_day' => 50,
                'image' => 'car1.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'reserved' => 0,
                'reservation_id' => null,
                'insurance_status' => 'Active',
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'engine' => '1.8L',
                'price_per_day' => 45,
                'image' => 'car2.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'reserved' => 0,
                'reservation_id' => null,
                'insurance_status' => 'Active',
            ],
            [
                'brand' => 'Ford',
                'model' => 'Mustang',
                'engine' => '5.0L V8',
                'price_per_day' => 70,
                'image' => 'car3.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'reserved' => 0,
                'reservation_id' => null,
                'insurance_status' => 'Active',
            ],
            [
                'brand' => 'BMW',
                'model' => 'X5',
                'engine' => '3.0L',
                'price_per_day' => 80,
                'image' => 'car4.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'reserved' => 0,
                'reservation_id' => null,
                'insurance_status' => 'Active',
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'E-Class',
                'engine' => '2.0L',
                'price_per_day' => 65,
                'image' => 'car5.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'reserved' => 0,
                'reservation_id' => null,
                'insurance_status' => 'Active',
            ],

            // Add more car data entries here
        ]);
    }

}
