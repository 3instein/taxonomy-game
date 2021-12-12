<?php

namespace Database\Seeders;

use App\Models\Evolution;
use Illuminate\Database\Seeder;

class EvolutionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Evolution::create([
            'name' => 'Jerapah Leher Pendek',
            'description' => 'Jerapah ini lehernya pendek',
            'price' => 99,
            'prerequisite_id' => 1
        ]);
    }
}
