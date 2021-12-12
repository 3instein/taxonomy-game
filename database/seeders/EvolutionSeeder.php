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
            'name' => 'Kromosom',
            'description' => 'Kromosom adalah molekul DNA yang mengandung materi genetik. Kromosom mempertahankan urutan genom yang memungkinkan sifat-sifat di turunkan dari induk ke anakan.',
            'price' => 1
        ]);
    }
}
