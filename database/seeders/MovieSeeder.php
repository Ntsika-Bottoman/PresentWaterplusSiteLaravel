<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $Movies = [
            [
                'name' => 'Automatic Package',
                'director' => '10 Lessons R2999.99',
                'director1' => 'Ground Access R199.99',
                'director2' => 'Car Hire R849.99',
                'director3' => 'Licence Booking fee R227.99',
                'director4' => 'Licence Issuing fee R227.99',
                'director5' => 'Service fee R99.99',
                'director6' => 'Total = R4605.99',
                'poster' => 'pics/automaticgear.jpg',
                'price' => 4606
            ],
            [
                'name' => 'Motorcycle Package',
                'director' => '10 Lessons R4299.99',
                'director1' => 'Ground Access R199.99',
                'director2' => 'Bike Hire R949.99',
                'director3' => 'Learners Booking & Issuing fee R167.99',
                'director4' => 'Licence Booking & Issuing fee R383.99',
                'director5' => 'Service fee R99.99',
                'director6' => 'Total = R6101.99',
                'poster' => 'pics/motorcycle.jpg',
                'price' => 6102
            ],
            [
                'name' => 'Code 08 Package',
                'director' => '10 Lessons R1999.99',
                'director1' => 'Ground Access R199.99',
                'director2' => 'Car Hire 799.99',
                'director3' => 'Licence Booking fee R227.99 ',
                'director4' => 'Licence Issuing fee R227.99',
                'director5' => 'Service fee R99.99',
                'director6' => 'Total = R3555.99',
                'poster' => 'pics/womandrivingResized.jpg',
                'price' => 3556
            ],
            [
                'name' => 'Code 10 Package',
                'director' => '10 Lessons R2499.99',
                'director1' => 'Ground Access R199.99',
                'director2' => 'Truck Hire R999.99',
                'director3' => 'Licence Booking fee R239.99',
                'director4' => 'Licence Issuing fee R227.99',
                'director5' => 'Service fee R99.99',
                'director6' => 'Total = R4267.99',
                'poster' => 'pics/smalltrucklessonResized.jpg',
                'price' => 4268
            ],
            [
                'name' => 'Code 14 Package',
                'director' => '10 Lessons R3499.99',
                'director1' => 'Ground Access R199.99',
                'director2' => 'Truck Hire R1749.99',
                'director3' => 'Licence Booking fee R239.99',
                'director4' => 'Licence Issuing fee R227.99',
                'director5' => 'Service fee R99.99',
                'director6' => 'Total = R6017.99',
                'poster' => 'pics/sidetipper.jpg',
                'price' => 6018
            ]
        ];
        foreach ($Movies as $key => $value) {
            Movie::create($value);
        }
    }
}
