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
            'name'=> 'Dictyoceratida' 
        ]);

        Order::create([
            'class_id' => 2,
            'name'=> 'Lobata' 
        ]);

        Order::create([
            'class_id' => 4,
            'name'=> 'Myllokunmingiida' 
        ]);
    }
}
