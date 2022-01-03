<?php

namespace Database\Seeders;

use App\Models\Evolution;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        Evolution::create([
            'species_id' => 3,
            'name' => 'Simetri Bilateral',
            'description' => 'Organisme dengan sisi kiri dan kanan yang identikal, sebuah kepala, dan sebuah ekor yang menunjukkan simetri bilateral. Evolusi ini membantu organisme untuk mempunyai sistem saraf yang kompleks.',
            'image_path' => '',
            'prerequisite_id' => 7,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 3,
            'name' => 'Jantung',
            'description' => 'Jantung adalah organ dalam yang didedikasikan untuk memompa darah dalam sebuah organisme. Pusat dari sistem peredaran darah, organ ini menjaga agar organisme tetap hidup.',
            'image_path' => '',
            'prerequisite_id' => 10,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 3,
            'name' => 'Titik pigmen',
            'description' => 'Titik pigmen adalah sebuah reseptor yang sensitif akan cahaya. Titik pigmen memudahkan organisme untuk membedakan antara terang dan gelap.',
            'image_path' => '',
            'prerequisite_id' => 10,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 3,
            'name' => 'Tali Saraf',
            'description' => 'Saraf adalah sekumpulan fiber saraf yang tersebar di seluruh tubuh organisme. Mereka membentuk sistem saraf yang sederhana.',
            'image_path' => '',
            'prerequisite_id' => 9,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 3,
            'name' => 'Kepompong',
            'description' => 'Telur yang sudah difertilisasi dibungkus kepompong yang kemudian disimpan di dalam tubuh cacing pipih. Kepompong akan menyediakan nutrisi yang diperlukan untuk pertumbuhan embrio dalam telur, yang kemudian akan menetas dan menjadi cacing pipih baru.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Sirip',
            'description' => 'Prototipe kaki dan tangan. Sirip merupakan dasar evolusi dari kaki belakang mamalia, reptil, dan burung serta amfibi yang ada di daratan.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Rahang',
            'description' => 'Tulang yang mengelilingi mulut, rahang membuat respirasi dan penyerapan nutrisi lebih efisien. Mereka memungkinkan mengunyah, menahan gigi, dan melindungi lidah serta organ lunak.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Insang',
            'description' => 'Insang adalah organ respirasi yang dimiliki ikan untuk mengekstrak oksigen dari air di sekitar mereka. Insang memungkinkan ikan untuk bernafas di dalam air.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Berdarah dingin',
            'description' => 'Organisme berdarah dingin mengandalkan sumber panas eksternal untuk mengatur suhu tubuh mereka. Hal ini memungkinkan organisme berdarah dingin untuk memperlambat metabolisme dan menyimpan energi, tetapi juga rentan mengalami suhu tubuh yang terlalu panas atau terlalu dingin.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Telur ikan',
            'description' => 'Telur ikan berupa jelly dan terkadang semi transparan bertujuan untuk melindungi embrio bertahan hidup di lingkungan yang lembab dan basah. Telur ikan meningkatkan kecepatan reproduksi ikan.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Medulla Oblongata',
            'description' => 'Struktur yang terletak di bagian bawah batang otak, yang mengontrol fungsi otonom tubuh seperti detak jantung, bernafas, dan tidur. Evolusi ini berasal dari ikan sejak 500 miliar tahun lalu dan membentuk sebagian besar otak reptil.',
            'image_path' => '',
            'prerequisite_id' => 13,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Ikan paru',
            'description' => 'Ikan paru adalah ikan air tawar yang berevolusi pertama kali saat periode Triassic dan era Mesozoikum. Ikan paru menghirup udara dan dapat bertahan di daratan dengan cara mengubur diri mereka ke dalam lumpur dengan sirip mereka.',
            'image_path' => '',
            'prerequisite_id' => 17,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Kaki',
            'description' => 'Prototipe kaki dan tangan. Sirip merupakan dasar evolusi dari kaki belakang mamalia, reptil, dan burung serta amfibi yang ada di daratan.',
            'image_path' => '',
            'prerequisite_id' => 15,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Telinga',
            'description' => 'Organ pendengaran yang lebih modern untuk mendeteksi vibrasi di udara, telinga memungkinkan makhluk untuk mendengar predator yang menyelinap untuk memangsa mereka atau ketika mangasa mereka mencoba untuk kabur.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Paru-paru',
            'description' => 'Evolusi dari gelembung renang pada ikan, gelembung yang berisikan gas yang disebut paru-paru memberikan kemampuan bernafas pada tetrapoda dan memungkinkan mereka hidup di daratan.',
            'image_path' => '',
            'prerequisite_id' => 21,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Epidermis Hidrofobik',
            'description' => 'Sisik dan kulit yang hidrofobik memungkinkan reptil untuk berjalan di daratan, mengurangi kemungkinan mereka mengalami dehidrasi.',
            'image_path' => '',
            'prerequisite_id' => 21,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Berkaki empat',
            'description' => 'Makhluk yang berdiri dan berjalan dengan empat kaki, disebut quadrupeds. Evolusi ini membutuhkan sendi yang kuat, dan memungkinkan makhluk untuk berdiri jauh dari tanah dan menempuh jarak yang cukup jauh.',
            'image_path' => '',
            'prerequisite_id' => 22,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Cangkang telur',
            'description' => 'Telur adalah sistem dukungan kehidupan mandiri yang berisikan cairan ketuban yang memungkinkan reproduksi di luar lingkungan air. Reptil, burung dan beberapa mamalia bereproduksi dengan bertelur.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Berdarah panas',
            'description' => 'Organisme berdarah panas mempunyai kemampuan untuk mengatur suhu tubuh mereka agar lebih tinggi daripada suhu lingkungan. Hal ini memungkinkan organisme berdarah panas untuk tinggal di habitat yang lebih beragam.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Epidermis bersisik',
            'description' => 'Kulit yang tebal dan kuat serta dibungkus sisik memungkinkan reptil untuk hidup di daratan tanpa harus kembali ke air secara periodikal untuk bertahan hidup. Amfibi tidak mempunyai evolusi ini, yang mana menjadikan reptil spesies yang dominan di daratan untuk waktu yang cukup lama.',
            'image_path' => '',
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Reptil',
            'description' => 'Reptil modern dapat dilacak hingga jaman Archosaurs. Walaupun reptil modern sudah banyak berubah namun mereka masih membawa sifat-sifat dan karakteristik dari pendahulu mereka yaitu dinosaurus.',
            'image_path' => '',
            'prerequisite_id' => 29,
            'price' => 1,
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Eksidis',
            'description' => 'Ketika kulit reptil telah tumbuh lebih dari kulit lama mereka, mereka harus merontokkan kulit lama mereka. Ketika kulit lama mereka telah rontok, reptil akan memakan kulit lama mereka untuk nutrisi tambahan yang berharga.',
            'image_path' => '',
            'prerequisite_id' => 30,
            'price' => 1,
        ]);
    }
}
