<?php

namespace Database\Seeders;

use App\Models\Genus;
use Illuminate\Database\Seeder;

class GenusSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Genus::create([
            'family_id' => 1,
            'name' => 'Spongia Linnaeus'
        ]);

        Genus::create([
            'family_id' => 2,
            'name' => 'Mnemiopsis'
        ]);

        Genus::create([
            'family_id' => 3,
            'name' => 'Dalyellia'
        ]);

        Genus::create([
            'family_id' => 4,
            'name' => 'Haikouichthys'
        ]);

        Genus::create([
            'family_id' => 5,
            'name' => 'Acanthostega'
        ]);

        Genus::create([
            'family_id' => 6,
            'name' => 'Morganucodon'
        ]);

        Genus::create([
            'family_id' => 7,
            'name' => 'Proconsul'
        ]);

        Genus::create([
            'family_id' => 8,
            'name' => 'Homo'
        ]);
    }
}
