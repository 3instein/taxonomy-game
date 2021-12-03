<?php

namespace Database\Seeders;

use App\Models\Kingdom;
use Illuminate\Database\Seeder;

class KingdomSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Kingdom::create([
            'domain_id' => 1,
            'name' => 'Animalia'
        ]);

        Kingdom::create([
            'domain_id' => 1,
            'name' => 'Plantae'
        ]);
    }
}
