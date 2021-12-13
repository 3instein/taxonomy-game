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
        // Genus::create([
        //     'family_id' => 1,
        //     'name' => 'Homo'
        // ]);

        // Genus::create([
        //     'family_id' => 2,
        //     'name' => 'Felis'
        // ]);

        // Genus::create([
        //     'family_id' => 3,
        //     'name' => 'Canis'
        // ]);

        // Genus::create([
        //     'family_id' => 4,
        //     'name' => 'Lumbricus'
        // ]);

        // Genus::create([
        //     'family_id' => 5,
        //     'name' => 'Orcinus'
        // ]);

        // Genus::create([
        //     'family_id' => 6,
        //     'name' => 'Rosa'
        // ]);

        // Genus::create([
        //     'family_id' => 7,
        //     'name' => 'Bambusa'
        // ]);

        // Genus::create([
        //     'family_id' => 8,
        //     'name' => 'Helianthus'
        // ]);

        // Genus::create([
        //     'family_id' => 9,
        //     'name' => 'Nymphaea'
        // ]);

        // Genus::create([
        //     'family_id' => 10,
        //     'name' => 'Bauhinia'
        // ]);

        Genus::create([
            'family_id' => 1,
            'name' => 'Spongia Linnaeus'
        ]);
    }
}
