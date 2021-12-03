<?php

namespace Database\Seeders;

use App\Models\Phylum;
use Illuminate\Database\Seeder;

class PhylumSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Phylum::create([
            'kingdom_id' => 1,
            'name' => 'Chordata'
        ]);

        Phylum::create([
            'kingdom_id' => 1,
            'name' => 'Annelida'
        ]);

        Phylum::create([
            'kingdom_id' => 2,
            'name' => 'Magnoliophyta'
        ]);

        Phylum::create([
            'kingdom_id' => 2,
            'name' => 'Spermatohyta'
        ]);
    }
}
