<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Order::create([
            'class_id' => 1,
            'name' => 'Primates'
        ]);

        Order::create([
            'class_id' => 1,
            'name' => 'Carnivora'
        ]);

        Order::create([
            'class_id' => 2,
            'name' => 'Haplotaxida'
        ]);

        Order::create([
            'class_id' => 1,
            'name' => 'Cetacea'
        ]);

        Order::create([
            'class_id' => 3,
            'name' => 'Rosidales'
        ]);

        Order::create([
            'class_id' => 4,
            'name' => 'Poales'
        ]);

        Order::create([
            'class_id' => 3,
            'name' => 'Asterales'
        ]);

        Order::create([
            'class_id' => 3,
            'name' => 'Nymphaeales'
        ]);

        Order::create([
            'class_id' => 3,
            'name' => 'Fabales'
        ]);
    }
}
