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
        $cars = [
            [
                'brand' => 'Toyota',
                'model' => 'Camry',
                'engine' => '2.5L',
                'price_per_day' => 50,
                'image' => '/images/cars/Toyota_Camry.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'reduce' => 30,
                'stars' => 5,
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'engine' => '1.8L',
                'price_per_day' => 45,
                'image' => '/images/cars/Honda_Civic.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'reduce' => 10,
                'stars' => 5,
            ],
            [
                'brand' => 'Ford',
                'model' => 'Mustang',
                'engine' => '5.0L V8',
                'price_per_day' => 70,
                'image' => '/images/cars/Ford_Mustang.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'reduce' => 0,
                'stars' => 5,
            ],
            [
                'brand' => 'BMW',
                'model' => 'X5',
                'engine' => '3.0L',
                'price_per_day' => 80,
                'image' => '/images/cars/BMW_X5.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 20,
                'stars' => 5,
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'E-Class',
                'engine' => '2.0L',
                'price_per_day' => 65,
                'image' => '/images/cars/Mercedes-Benz_E-Class.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 10,
                'stars' => 5,
            ],
            [
                'brand' => 'Chevrolet',
                'model' => 'Malibu',
                'engine' => '1.5L',
                'price_per_day' => 55,
                'image' => '/images/cars/Chevrolet_Malibu.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 50,
                'stars' => 5,
            ],
            [
                'brand' => 'Audi',
                'model' => 'A4',
                'engine' => '2.0L',
                'price_per_day' => 70, 5,
                'image' => '/images/cars/Audi_A4.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 40,
                'stars' => 5,
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Altima',
                'engine' => '2.5L',
                'price_per_day' => 50,
                'image' => '/images/cars/Nissan_Altima.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 60,
                'stars' => 5,
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Sonata',
                'engine' => '2.5L',
                'price_per_day' => 45,
                'image' => '/images/cars/Hyundai_Sonata.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 30,
                'stars' => 5,
            ],
            [
                'brand' => 'Kia',
                'model' => 'Optima',
                'engine' => '2.0L',
                'price_per_day' => 45,
                'image' => '/images/cars/Kia_Optima.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 20,
                'stars' => 5,
            ],
            [
                'brand' => 'Volkswagen',
                'model' => 'Golf',
                'engine' => '1.4L',
                'price_per_day' => 60,
                'image' => '/images/cars/Volkswagen_Golf.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 40,
                'stars' => 5,
            ],
            [
                'brand' => 'Subaru',
                'model' => 'Impreza',
                'engine' => '2.0L',
                'price_per_day' => 60,
                'image' => '/images/cars/Subaru_Impreza.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 20,
                'stars' => 5,
            ],
            [
                'brand' => 'Ford',
                'model' => 'Focus',
                'engine' => '1.6L',
                'price_per_day' => 50,
                'image' => '/images/cars/Ford_Focus.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 30,
                'stars' => 5,
            ],
            [
                'brand' => 'Tesla',
                'model' => 'Model 3',
                'engine' => 'Electric',
                'price_per_day' => 90,
                'image' => '/images/cars/Tesla_Model_3.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 20,
                'stars' => 5,
            ],
            [
                'brand' => 'Chevrolet',
                'model' => 'Camaro',
                'engine' => '6.2L V8',
                'price_per_day' => 100,
                'image' => '/images/cars/Chevrolet_Camaro.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 20,
                'stars' => 5,
            ],
            [
                'brand' => 'Jaguar',
                'model' => ' F-Type',
                'engine' => '3.0L V6',
                'price_per_day' => 120,
                'image' => '/images/cars/Jaguar_F-Type.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 35,
                'stars' => 5,
            ],
            [
                'brand' => 'Lexus',
                'model' => 'RX 350',
                'engine' => '3.5L V6',
                'price_per_day' => 80,
                'image' => '/images/cars/Lexus_RX_350.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 40,
                'stars' => 5,
            ],
            [
                'brand' => 'Volvo',
                'model' => 'XC60',
                'engine' => '2.0L',
                'price_per_day' => 70,
                'image' => '/images/cars/Volvo_XC60.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 20,
                'stars' => 5,
            ],
            [
                'brand' => 'Porsche',
                'model' => '911 Carrera',
                'engine' => '3.0L Flat-6',
                'price_per_day' => 150.00,
                'image' => '/images/cars/Porsche_911_Carrera.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 40,
                'stars' => 5,
            ],
            [
                'brand' => 'Mitsubishi',
                'model' => 'Outlander',
                'engine' => '2.4L',
                'price_per_day' => 60.00,
                'image' => '/images/cars/Mitsubishi_Outlander.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 30,
                'stars' => 5,
            ],
            [
                'brand' => 'Land Rover',
                'model' => 'Range Rover Sport',
                'engine' => '3.0L V6',
                'price_per_day' => 120.00,
                'image' => '/images/cars/Land_Rover_Range_Rover_Sport.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 20,
                'stars' => 5,
            ],
            [
                'brand' => 'GMC',
                'model' => 'Sierra_1500',
                'engine' => '5.3L V8',
                'price_per_day' => 120.00,
                'image' => '/images/cars/GMC_Sierra_1500.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 35,
                'stars' => 4,
            ],
            [
                'brand' => 'Fiat',
                'model' => '500',
                'engine' => '1.4L',
                'price_per_day' => 40.00,
                'image' => '/images/cars/Fiat_500.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 40,
                'stars' => 5,
            ],
            [
                'brand' => 'Mini',
                'model' => 'Cooper',
                'engine' => '1.5L',
                'price_per_day' => 55.00,
                'image' => '/images/cars/Mini_Cooper.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'reduce' => 30,
                'stars' => 5,
            ],
            [
                'brand' => 'Audi',
                'model' => 'Q5',
                'engine' => '2.0L',
                'price_per_day' => 80.00,
                'image' => '/images/cars/Audi_Q5.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 40,
                'stars' => 5,
            ], [
                'brand' => 'Chevrolet',
                'model' => 'Tahoe',
                'engine' => '5.3L V8',
                'price_per_day' => 110.00,
                'image' => '/images/cars/Chevrolet_Tahoe.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 20,
                'stars' => 5,
            ],
            [
                'brand' => 'Ford',
                'model' => 'Explorer',
                'engine' => '3.5L V6',
                'price_per_day' => 95.00,
                'image' => '/images/cars/Ford_Explorer.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 30,
                'stars' => 5,
            ],
            [
                'brand' => 'Jeep',
                'model' => 'Wrangler',
                'engine' => '3.6L V6',
                'price_per_day' => 100.00,
                'image' => '/images/cars/Jeep_Wrangler.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 20,
                'stars' => 5,
            ],
            [
                'brand' => 'Mazda',
                'model' => 'CX-5',
                'engine' => ' 2.5L',
                'price_per_day' => 65.00,
                'image' => '/images/cars/Mazda_CX-5.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 15,
                'stars' => 5,
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Tucson',
                'engine' => ' 2.0L',
                'price_per_day' => 50.00,
                'image' => '/images/cars/Hyundai_Tucson.jpg',
                'quantity' => 1,
                'status' => 'Available',

                'reduce' => 40,
                'stars' => 5,
            ],
        ];

        foreach ($cars as $car) {
            DB::table('cars')->insert([
                'brand' => $car['brand'],
                'model' => $car['model'],
                'engine' => $car['engine'],
                'price_per_day' => $car['price_per_day'],
                'image' => $car['image'],
                'quantity' => $car['quantity'],
                'status' => $car['status'],
                'reduce' => $car['reduce'],
                'stars' => $car['stars'],
            ]);
        }
    }
}
