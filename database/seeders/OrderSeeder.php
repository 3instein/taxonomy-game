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
            'class_id' => 3,
            'name'=> 'Rhabdocoela' 
        ]);

        Order::create([
            'class_id' => 4,
            'name'=> 'Myllokunmingiida' 
        ]);

        Order::create([
            'class_id' => 5,
            'name'=> 'Acanthostegiida' 
        ]);
        
        Order::create([
            'class_id' => 6,
            'name' => 'Morganucodonta'
        ]);

        Order::create([
            'class_id' => 7,
            'name' => 'Primates'
        ]);
    }
}
