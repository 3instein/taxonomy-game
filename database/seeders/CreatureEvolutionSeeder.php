<?php

namespace Database\Seeders;

use App\Models\CreatureEvolution;
use Illuminate\Database\Seeder;

class CreatureEvolutionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        CreatureEvolution::create([
            'species_id' => 1,
            'name' => 'Manusia',
            'description' => 'Manusia adalah spesies dominan di bumi. Mereka adalah produk dari miliyaran tahun evolusi, manusia merupakan "binatang" pertama yang menciptakan kultur budaya, komunitas sosial dan teknologi.',
            'price' => 1,
            'prerequisite_id' => 1,
        ]);
    }
}
