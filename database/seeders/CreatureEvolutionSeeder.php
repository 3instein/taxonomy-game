<?php

namespace Database\Seeders;

use App\Models\CreatureEvolution;
use Illuminate\Database\Seeder;

class CreatureEvolutionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        CreatureEvolution::create([
            'species_id' => 1,
            'name' => 'Jaringan',
            'description' => 'Jaringan adalah kumpulan sel yang menjadi satu untuk melakukan fungsi spesifik organ terbentuk dari kumpulan jaringan.',
            'price' => 1
        ]);

        CreatureEvolution::create([
            'species_id' => 1,
            'name' => 'Otot',
            'description' => 'Otot adalah jaringan fibrosa di tubuh binatang yang memiliki kemampuan untuk berkontraksi. Hal ini memungkinkan otot untuk bergerak yang mana kemudian menggerakan tulang yang terhubung dengan otot.',
            'prerequisite_id' => 1,
            'price' => 1
        ]);

        CreatureEvolution::create([
            'species_id' => 1,
            'name' => 'Filter Makan',
            'description' => 'Cara pasif untuk menemukan nutrisi dengan menggunakan filter nutrisi lewat tubuh organisme. Ini adalah cara makan untuk kerang, kril, dan bunga karang.',
            'price' => 1
        ]);

        CreatureEvolution::create([
            'species_id' => 2,
            'name' => 'Berenang',
            'description' => 'Kemampuan organisme untuk bergerak dari satu tempat ke tempat lain dalam air.',
            'prerequisite_id' => 2,
            'price' => 1
        ]);

        CreatureEvolution::create([
            'species_id' => 2,
            'name' => 'Simetri Radial',
            'description' => 'Organisme yang dapat dibagi menjadi potongan identik melalui titik sentral, bentuk simetri ini lebih kompleks daripada simetri bilateral.',
            'price' => 1
        ]);

        CreatureEvolution::create([
            'species_id' => 2,
            'name' => 'Knidosit',
            'description' => 'Senjata organik pertama, knidosit adalah sel eksplosif yang menembakan harpoon untuk pertahanan diri dan berburu.',
            'price' => 1
        ]);
    }
}
