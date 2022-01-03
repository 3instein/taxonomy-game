<?php

namespace Database\Seeders;

use App\Models\Species;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Species::create([
            'genus_id' => 1,
            'name' => 'Sponge Sp',
            'common_name' => 'Bunga Karang',
            'price' => 1,
            'description' => 'Organisme multiseluler pertama di dunia. Bunga karang adalah organisme yang diam di tempat dan menyerap nutrisi menggunakan sebuah filter untuk menyaring makanan. Bunga karang terbentuk dari banyak sel eukariotik yang menjadi satu organisme.',
            'image_path' => 'http://taxonomy-game-web.test/assets/species/sponge-sp.png'
        ]);

        Species::create([
            'genus_id' => 2,
            'name' => 'Mnemiopsis Iedyi',
            'common_name' => 'Ubur-ubur',
            'price' => 1,
            'description' => 'Ubur-ubur adalah organisme laut bertubuh lunak dengan tubuh berbentuk payung dengan tekstur mirip gelatin dilengkapi dengan tentakel. Mereka bisa berenang melalui air dengan mendenyutkan tubuh mereka.',
            'image_path' => 'http://taxonomy-game-web.test/assets/species/mnemiopsis-iedyi.png',
            'prerequisite_id' => 1
        ]);
        
        Species::create([
            'genus_id' => 2,
            'name' => 'Derostoma Elongatum',
            'common_name' => 'Cacing pipih',
            'price' => 1,
            'description' => 'Cacing pipih adalah organisme pertama dengan simetri bilateral, yang memungkinkan adanya otak dan organ internal. Organisme sederhana ini merupakan awal dimulainya organisme bertulang belakang (vertebrata).',
            'image_path' => '',
            'prerequisite_id' => 2
        ]);

    }
}
