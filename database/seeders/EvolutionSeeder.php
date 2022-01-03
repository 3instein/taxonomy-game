<?php

namespace Database\Seeders;

use App\Models\Evolution;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvolutionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Evolution::create([
            'name' => 'Kromosom',
            'description' => 'Kromosom adalah molekul DNA yang mengandung materi genetik. Kromosom mempertahankan urutan genom yang memungkinkan sifat-sifat diturunkan dari induk ke anakan.',
            'image_path' => 'http://taxonomy-game-web.test/assets/evolutions/kromosom.jpg',
            'price' => 1
        ]);

        Evolution::create([
            'name' => 'Virus',
            'description' => 'Virus adalah agen biologi yang bereplikasi di dalam sel lain. Uniknya, jika bukan karena kemampuan virus untuk masuk ke DNA organisme, manusia mungkin tidak akan ada.',
            'image_path' => 'http://taxonomy-game-web.test/assets/evolutions/virus.jpeg',
            'prerequisite_id' => 1,
            'price' => 1
        ]);

        Evolution::create([
            'species_id' => 1,
            'name' => 'Jaringan',
            'description' => 'Jaringan adalah kumpulan sel yang menjadi satu untuk melakukan fungsi spesifik organ terbentuk dari kumpulan jaringan.',
            'image_path' => 'http://taxonomy-game-web.test/assets/creatures-evolutions/jaringan.png',
            'price' => 1
        ]);

        Evolution::create([
            'species_id' => 1,
            'name' => 'Otot',
            'description' => 'Otot adalah jaringan fibrosa di tubuh binatang yang memiliki kemampuan untuk berkontraksi. Hal ini memungkinkan otot untuk bergerak yang mana kemudian menggerakan tulang yang terhubung dengan otot.',
            'image_path' => 'http://taxonomy-game-web.test/assets/creatures-evolutions/otot.png',
            'prerequisite_id' => 3,
            'price' => 1
        ]);

        Evolution::create([
            'species_id' => 1,
            'name' => 'Filter Makan',
            'description' => 'Cara pasif untuk menemukan nutrisi dengan menggunakan filter nutrisi lewat tubuh organisme. Ini adalah cara makan untuk kerang, kril, dan bunga karang.',
            'image_path' => 'http://taxonomy-game-web.test/assets/creatures-evolutions/filter-feeding.png',
            'price' => 1
        ]);

        Evolution::create([
            'species_id' => 2,
            'name' => 'Berenang',
            'description' => 'Kemampuan organisme untuk bergerak dari satu tempat ke tempat lain dalam air.',
            'image_path' => 'http://taxonomy-game-web.test/assets/creatures-evolutions/swimming.jpg',
            'prerequisite_id' => 4,
            'price' => 1
        ]);

        Evolution::create([
            'species_id' => 2,
            'name' => 'Simetri Radial',
            'description' => 'Organisme yang dapat dibagi menjadi potongan identik melalui titik sentral, bentuk simetri ini lebih kompleks daripada simetri bilateral.',
            'image_path' => 'http://taxonomy-game-web.test/assets/creatures-evolutions/radial-symmetry.png',
            'price' => 1
        ]);

        Evolution::create([
            'species_id' => 2,
            'name' => 'Knidosit',
            'description' => 'Senjata organik pertama, knidosit adalah sel eksplosif yang menembakan harpoon untuk pertahanan diri dan berburu.',
            'image_path' => 'http://taxonomy-game-web.test/assets/creatures-evolutions/knidosit.png',
            'price' => 1
        ]);
        
        Evolution::create([
            'species_id' => 2,
            'name' => 'Sistem Saraf',
            'description' => 'Sistem saraf adalah jaringan sel yang mengirimkan stimuli melalui tubuh organisme dalam bentuk sinyal elektrik. Sistem saraf dikontrol oleh otak.',
            'image_path' => 'http://taxonomy-game-web.test/assets/evolutions/sistem-saraf.jpg',
            'price' => 1
        ]);
    }
}
