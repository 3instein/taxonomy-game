<?php

namespace Database\Seeders;

use App\Models\CreatureUpgrade;
use Illuminate\Database\Seeder;

class CreaturesUpgradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CreatureUpgrade::create([
            'species_id' => 1,
            'name' => 'Reproduction',
            'description' => 'Have babies',
            'price' => 100,
        ]);
    }
}
