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
            'image_path' => 'assets/species/sponge-sp.png'
        ]);

        Species::create([
            'genus_id' => 2,
            'name' => 'Mnemiopsis Iedyi',
            'common_name' => 'Ubur-ubur',
            'price' => 1,
            'description' => 'Ubur-ubur adalah organisme laut bertubuh lunak dengan tubuh berbentuk payung dengan tekstur mirip gelatin dilengkapi dengan tentakel. Mereka bisa berenang melalui air dengan mendenyutkan tubuh mereka.',
            'image_path' => 'assets/species/mnemiopsis-iedyi.png',
            'prerequisite_id' => 1
        ]);

        Species::create([
            'genus_id' => 3,
            'name' => 'Dalyellia Elongatum',
            'common_name' => 'Cacing pipih',
            'price' => 1,
            'description' => 'Cacing pipih adalah organisme pertama dengan simetri bilateral, yang memungkinkan adanya otak dan organ internal. Organisme sederhana ini merupakan awal dimulainya organisme bertulang belakang (vertebrata).',
            'image_path' => 'assets/species/dalyellia-elongatum.jpg',
            'prerequisite_id' => 2
        ]);

        Species::create([
            'genus_id' => 4,
            'name' => 'Haikouichthys Ercaicunensis',
            'common_name' => 'Ikan',
            'price' => 1,
            'description' => 'Ikan memiliki sirip untuk menjelajahi lautan. Ikan berevolusi dari invertebrata yang kurang lincah serta ikan telah berdiversifikasi menjadi banyak spesies ikan.',
            'image_path' => 'assets/species/haikouichthys-ercaicunensis.jpg',
            'prerequisite_id' => 3
        ]);

        Species::create([
            'genus_id' => 5,
            'name' => 'Acanthostega gunnari',
            'common_name' => 'Tetrapoda',
            'price' => 1,
            'description' => 'Tetrapoda adalah makhluk air pertama yang mengevolusikan kaki dan sifat amfibi dan merayap di daratan.',
            'image_path' => 'assets/species/acanthostega-gunnari.jpg',
            'prerequisite_id' => 4
        ]);

        Species::create([
            'genus_id' => 6,
            'name' => 'Morganucodon Watsoni',
            'common_name' => 'Mamalia',
            'price' => 1,
            'description' => 'Mamalia adalah vertebrata pertama berdarah panas, mamalia merawat anakan mereka dengan susu dari kelenjar susu mereka. Mamalia mempunyai kulit yang ditutupi bulu atau rambut dan mereka memiliki otak yang lebih besar yang mempunyai neocortex.',
            'image_path' => 'assets/species/morganucodon-watsoni.jpg',
            'prerequisite_id' => 5 
        ]);

        Species::create([
            'genus_id' => 7,
            'name' => 'Proconsul Africanus',
            'common_name' => 'Kera',
            'price' => 1,
            'description' => 'Kemajuan pada evolusi primata, kera merupakan leluhur paling awal dari manusia. Cabang evolusi yang berbeda dari kera merupakan awal dari manusia dan kera modern.',
            'image_path' => 'assets/species/proconsul-africanus.jpg',
            'prerequisite_id' => 6 
        ]);

        Species::create([
            'genus_id' => 8,
            'name' => 'Homo Sapiens',
            'common_name' => 'Manusia',
            'price' => 1,
            'description' => 'Manusia adalah spesies dominan di bumi. Hasil dari evolusi berjuta-juta tahun, manusia merupakan makhluk pertama yang menciptakan budaya, masyarakat, dan teknologi.',
            'image_path' => 'assets/species/homo-sapiens.jpg',
            'prerequisite_id' => 7 
        ]);
    }
}
