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
            'name' => 'Radiata'
        ]);

        Phylum::create([
            'kingdom_id' => 1,
            'name' => 'Ctenophora'
        ]);
        
        Phylum::create([
            'kingdom_id' => 1,
            'name' => 'Platyhelminthes'
        ]);

        Phylum::create([
            'kingdom_id' => 1,
            'name' => 'Chordata'
        ]);
    }
}
