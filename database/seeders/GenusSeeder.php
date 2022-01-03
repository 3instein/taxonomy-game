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
    }
}
