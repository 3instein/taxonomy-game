<?php

namespace Database\Seeders;

use App\Models\Species;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Species::create([
            'genus_id' => 1,
            'name' => 'Homo Sapiens'
        ]);

        Species::create([
            'genus_id' => 2,
            'name' => 'Felis Catus'
        ]);

        Species::create([
            'genus_id' => 3,
            'name' => 'Canis Familiaris'
        ]);

        Species::create([
            'genus_id' => 4,
            'name' => 'Lumbricus Rubellus'
        ]);

        Species::create([
            'genus_id' => 5,
            'name' => 'Orcinus Orca'
        ]);

        Species::create([
            'genus_id' => 6,
            'name' => 'Rosa Hybrida'
        ]);

        Species::create([
            'genus_id' => 7,
            'name' => 'Bambusa Vulgaris'
        ]);

        Species::create([
            'genus_id' => 8,
            'name' => 'Helianthus Annuus'
        ]);

        Species::create([
            'genus_id' => 9,
            'name' => 'Nymphaea Alba'
        ]);

        Species::create([
            'genus_id' => 10,
            'name' => 'Bauhinia Purpurea'
        ]);
    }
}
