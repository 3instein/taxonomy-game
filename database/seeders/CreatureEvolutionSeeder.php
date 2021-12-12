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
            'name' => 'Jaringan',
            'description' => 'Jaringan adalah kumpulan sel yang menjadi satu untuk melakukan fungsi spesifik organ terbentuk dari kumpulan jaringan.',
            'price' => 1
        ]);
    }
}
