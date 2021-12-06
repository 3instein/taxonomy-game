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
            'name' => 'Homo Sapiens',
            'price' => 100
        ]);

        Species::create([
            'genus_id' => 2,
            'name' => 'Felis Catus',
            'price' => 100
        ]);

        Species::create([
            'genus_id' => 3,
            'name' => 'Canis Familiaris',
            'price' => 100
        ]);

        Species::create([
            'genus_id' => 4,
            'name' => 'Lumbricus Rubellus',
            'price' => 100
        ]);

        Species::create([
            'genus_id' => 5,
            'name' => 'Orcinus Orca',
            'price' => 100
        ]);

        Species::create([
            'genus_id' => 6,
            'name' => 'Rosa Hybrida',
            'price' => 100
        ]);

        Species::create([
            'genus_id' => 7,
            'name' => 'Bambusa Vulgaris',
            'price' => 100
        ]);

        Species::create([
            'genus_id' => 8,
            'name' => 'Helianthus Annuus',
            'price' => 100
        ]);

        Species::create([
            'genus_id' => 9,
            'name' => 'Nymphaea Alba',
            'price' => 100
        ]);

        Species::create([
            'genus_id' => 10,
            'name' => 'Bauhinia Purpurea',
            'price' => 100
        ]);
    }
}
