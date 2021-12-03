<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Family::create([
            'order_id' => 1,
            'name' => 'Hominidae'
        ]);

        Family::create([
            'order_id' => 2,
            'name' => 'Felidae'
        ]);

        Family::create([
            'order_id' => 2,
            'name' => 'Canidae'
        ]);

        Family::create([
            'order_id' => 3,
            'name' => 'Lumbricidae'
        ]);

        Family::create([
            'order_id' => 4,
            'name' => 'Delphinidae'
        ]);

        Family::create([
            'order_id' => 5,
            'name' => 'Rosaceae'
        ]);

        Family::create([
            'order_id' => 6,
            'name' => 'Graminae'
        ]);

        Family::create([
            'order_id' => 7,
            'name' => 'Asteraceae'
        ]);

        Family::create([
            'order_id' => 8,
            'name' => 'Nymphaeaceae'
        ]);

        Family::create([
            'order_id' => 9,
            'name' => 'Caesalpiniaceae'
        ]);
    }
}
