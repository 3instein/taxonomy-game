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
        $image_path = 'assets/evolutions/';

        Evolution::create([
            'name' => 'Kromosom',
            'description' => 'Kromosom adalah molekul DNA yang mengandung materi genetik. Kromosom mempertahankan urutan genom yang memungkinkan sifat-sifat diturunkan dari induk ke anakan.',
            'image_path' => $image_path.'kromosom.jpg',
            'price' => 1
        ]);

        Evolution::create([
            'name' => 'Virus',
            'description' => 'Virus adalah agen biologi yang bereplikasi di dalam sel lain. Uniknya, jika bukan karena kemampuan virus untuk masuk ke DNA organisme, manusia mungkin tidak akan ada.',
            'image_path' => $image_path.'virus.jpeg',
            'prerequisite_id' => 1,
            'price' => 1
        ]);

        Evolution::create([
            'species_id' => 1,
            'name' => 'Jaringan',
            'description' => 'Jaringan adalah kumpulan sel yang menjadi satu untuk melakukan fungsi spesifik organ terbentuk dari kumpulan jaringan.',
            'image_path' => $image_path.'jaringan.png',
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 1,
            'name' => 'Otot',
            'description' => 'Otot adalah jaringan fibrosa di tubuh binatang yang memiliki kemampuan untuk berkontraksi. Hal ini memungkinkan otot untuk bergerak yang mana kemudian menggerakan tulang yang terhubung dengan otot.',
            'image_path' => $image_path.'otot.png',
            'prerequisite_id' => 3,
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 1,
            'name' => 'Filter Makan',
            'description' => 'Cara pasif untuk menemukan nutrisi dengan menggunakan filter nutrisi lewat tubuh organisme. Ini adalah cara makan untuk kerang, kril, dan bunga karang.',
            'image_path' => $image_path.'filter-feeding.png',
            'price' => 1,
            'percentage' => 1.5
        ]);

        Evolution::create([
            'species_id' => 2,
            'name' => 'Berenang',
            'description' => 'Kemampuan organisme untuk bergerak dari satu tempat ke tempat lain dalam air.',
            'image_path' => $image_path.'swimming.jpg',
            'prerequisite_id' => 4,
            'price' => 1,
            'percentage' => 1.5
        ]);

        Evolution::create([
            'species_id' => 2,
            'name' => 'Simetri Radial',
            'description' => 'Organisme yang dapat dibagi menjadi potongan identik melalui titik sentral, bentuk simetri ini lebih kompleks daripada simetri bilateral.',
            'image_path' => $image_path.'radial-symmetry.png',
            'price' => 1,
            'percentage' => 1.5
        ]);

        Evolution::create([
            'species_id' => 2,
            'name' => 'Knidosit',
            'description' => 'Senjata organik pertama, knidosit adalah sel eksplosif yang menembakan harpoon untuk pertahanan diri dan berburu.',
            'image_path' => $image_path.'knidosit.png',
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 2,
            'name' => 'Sistem Saraf',
            'description' => 'Sistem saraf adalah jaringan sel yang mengirimkan stimuli melalui tubuh organisme dalam bentuk sinyal elektrik. Sistem saraf dikontrol oleh otak.',
            'image_path' => $image_path.'sistem-saraf.jpg',
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 3,
            'name' => 'Simetri Bilateral',
            'description' => 'Organisme dengan sisi kiri dan kanan yang identikal, sebuah kepala, dan sebuah ekor yang menunjukkan simetri bilateral. Evolusi ini membantu organisme untuk mempunyai sistem saraf yang kompleks.',
            'image_path' => $image_path.'simetri-bilateral.png',
            'prerequisite_id' => 7,
            'price' => 1,
            'percentage' => 1.3
        ]);

        Evolution::create([
            'species_id' => 3,
            'name' => 'Jantung',
            'description' => 'Jantung adalah organ dalam yang didedikasikan untuk memompa darah dalam sebuah organisme. Pusat dari sistem peredaran darah, organ ini menjaga agar organisme tetap hidup.',
            'image_path' => $image_path.'jantung.jpg',
            'prerequisite_id' => 10,
            'price' => 1,
            'percentage' => 1.5
        ]);

        Evolution::create([
            'species_id' => 3,
            'name' => 'Titik pigmen',
            'description' => 'Titik pigmen adalah sebuah reseptor yang sensitif akan cahaya. Titik pigmen memudahkan organisme untuk membedakan antara terang dan gelap.',
            'image_path' => $image_path.'titik-pigmen.png',
            'prerequisite_id' => 10,
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 3,
            'name' => 'Tali Saraf',
            'description' => 'Saraf adalah sekumpulan fiber saraf yang tersebar di seluruh tubuh organisme. Mereka membentuk sistem saraf yang sederhana.',
            'image_path' => $image_path.'tali-saraf.png',
            'prerequisite_id' => 9,
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 3,
            'name' => 'Kepompong',
            'description' => 'Telur yang sudah difertilisasi dibungkus kepompong yang kemudian disimpan di dalam tubuh cacing pipih. Kepompong akan menyediakan nutrisi yang diperlukan untuk pertumbuhan embrio dalam telur, yang kemudian akan menetas dan menjadi cacing pipih baru.',
            'image_path' => $image_path.'kepompong.jpg',
            'price' => 1,
            'percentage' => 1.75
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Sirip',
            'description' => 'Prototipe kaki dan tangan. Sirip merupakan dasar evolusi dari kaki belakang mamalia, reptil, dan burung serta amfibi yang ada di daratan.',
            'image_path' => $image_path.'sirip.jpg',
            'price' => 1,
            'percentage' => 1.5
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Rahang',
            'description' => 'Tulang yang mengelilingi mulut, rahang membuat respirasi dan penyerapan nutrisi lebih efisien. Mereka memungkinkan mengunyah, menahan gigi, dan melindungi lidah serta organ lunak.',
            'image_path' => $image_path.'rahang.jpg',
            'price' => 1,
            'percentage' => 1.5
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Insang',
            'description' => 'Insang adalah organ respirasi yang dimiliki ikan untuk mengekstrak oksigen dari air di sekitar mereka. Insang memungkinkan ikan untuk bernafas di dalam air.',
            'image_path' => $image_path.'insang.jpg',
            'price' => 1,
            'percentage' => 1.25
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Berdarah dingin',
            'description' => 'Organisme berdarah dingin mengandalkan sumber panas eksternal untuk mengatur suhu tubuh mereka. Hal ini memungkinkan organisme berdarah dingin untuk memperlambat metabolisme dan menyimpan energi, tetapi juga rentan mengalami suhu tubuh yang terlalu panas atau terlalu dingin.',
            'image_path' => $image_path.'berdarah-dingin.png',
            'price' => 1,
            'percentage' => 1.33
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Telur ikan',
            'description' => 'Telur ikan berupa jelly dan terkadang semi transparan bertujuan untuk melindungi embrio bertahan hidup di lingkungan yang lembab dan basah. Telur ikan meningkatkan kecepatan reproduksi ikan.',
            'image_path' => $image_path.'telur-ikan.jpg',
            'price' => 1,
            'percentage' => 2.5
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Medulla Oblongata',
            'description' => 'Struktur yang terletak di bagian bawah batang otak, yang mengontrol fungsi otonom tubuh seperti detak jantung, bernafas, dan tidur. Evolusi ini berasal dari ikan sejak 500 miliar tahun lalu dan membentuk sebagian besar otak reptil.',
            'image_path' => $image_path.'medulla-oblongata.jpg',
            'prerequisite_id' => 13,
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 4,
            'name' => 'Ikan paru',
            'description' => 'Ikan paru adalah ikan air tawar yang berevolusi pertama kali saat periode Triassic dan era Mesozoikum. Ikan paru menghirup udara dan dapat bertahan di daratan dengan cara mengubur diri mereka ke dalam lumpur dengan sirip mereka.',
            'image_path' => $image_path.'ikan-paru.jpg',
            'prerequisite_id' => 17,
            'price' => 1,
            'percentage' => 1.25
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Kaki',
            'description' => 'Prototipe kaki dan tangan. Sirip merupakan dasar evolusi dari kaki belakang mamalia, reptil, dan burung serta amfibi yang ada di daratan.',
            'image_path' => $image_path.'kaki.png',
            'prerequisite_id' => 15,
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Telinga',
            'description' => 'Organ pendengaran yang lebih modern untuk mendeteksi vibrasi di udara, telinga memungkinkan makhluk untuk mendengar predator yang menyelinap untuk memangsa mereka atau ketika mangasa mereka mencoba untuk kabur.',
            'image_path' => $image_path.'telinga.jpg',
            'price' => 1,
            'percentage' => 1.75
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Paru-paru',
            'description' => 'Evolusi dari gelembung renang pada ikan, gelembung yang berisikan gas yang disebut paru-paru memberikan kemampuan bernafas pada tetrapoda dan memungkinkan mereka hidup di daratan.',
            'image_path' => $image_path.'paru-paru.jpg',
            'prerequisite_id' => 21,
            'price' => 1,
            'percentage' => 1.75
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Epidermis Hidrofobik',
            'description' => 'Sisik dan kulit yang hidrofobik memungkinkan reptil untuk berjalan di daratan, mengurangi kemungkinan mereka mengalami dehidrasi.',
            'image_path' => $image_path.'epidermis-hidrofobik.jpg',
            'prerequisite_id' => 21,
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Berkaki empat',
            'description' => 'Makhluk yang berdiri dan berjalan dengan empat kaki, disebut quadrupeds. Evolusi ini membutuhkan sendi yang kuat, dan memungkinkan makhluk untuk berdiri jauh dari tanah dan menempuh jarak yang cukup jauh.',
            'image_path' => $image_path.'berkaki-empat.png',
            'prerequisite_id' => 22,
            'price' => 1,
            'percentage' => 1.3
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Cangkang telur',
            'description' => 'Telur adalah sistem dukungan kehidupan mandiri yang berisikan cairan ketuban yang memungkinkan reproduksi di luar lingkungan air. Reptil, burung dan beberapa mamalia bereproduksi dengan bertelur.',
            'image_path' => $image_path.'cangkang-telur.jpg',
            'price' => 1,
            'percentage' => 2.5
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Berdarah panas',
            'description' => 'Organisme berdarah panas mempunyai kemampuan untuk mengatur suhu tubuh mereka agar lebih tinggi daripada suhu lingkungan. Hal ini memungkinkan organisme berdarah panas untuk tinggal di habitat yang lebih beragam.',
            'image_path' => $image_path.'berdarah-panas.png',
            'price' => 1,
            'percentage' => 1.2
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Epidermis bersisik',
            'description' => 'Kulit yang tebal dan kuat serta dibungkus sisik memungkinkan reptil untuk hidup di daratan tanpa harus kembali ke air secara periodikal untuk bertahan hidup. Amfibi tidak mempunyai evolusi ini, yang mana menjadikan reptil spesies yang dominan di daratan untuk waktu yang cukup lama.',
            'image_path' => $image_path.'epidermis-bersisik.jpg',
            'price' => 1,
            'percentage' => 1.6
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Reptil',
            'description' => 'Reptil modern dapat dilacak hingga jaman Archosaurs. Walaupun reptil modern sudah banyak berubah namun mereka masih membawa sifat-sifat dan karakteristik dari pendahulu mereka yaitu dinosaurus.',
            'image_path' => $image_path.'reptil.jpg',
            'prerequisite_id' => 29,
            'price' => 1,
            'percentage' => 1.5
        ]);

        Evolution::create([
            'species_id' => 5,
            'name' => 'Eksidis',
            'description' => 'Ketika kulit reptil telah tumbuh lebih dari kulit lama mereka, mereka harus merontokkan kulit lama mereka. Ketika kulit lama mereka telah rontok, reptil akan memakan kulit lama mereka untuk nutrisi tambahan yang berharga.',
            'image_path' => $image_path.'eksidis.jpg',
            'prerequisite_id' => 30,
            'price' => 1,
            'percentage' => 2.3
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Rambut',
            'description' => 'Rambut tidak hanya menjaga temperatur tubuh mamalia, folikel rambut juga berevolusi menjadi kelenjar susu yang memproduksi susu untuk anakan mamalia.',
            'image_path' => $image_path.'rambut.jpg',
            'price' => 1,
            'percentage' => 1.3
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Kelenjar keringat',
            'description' => 'Kelenjar keringat membantu mamalia untuk mengatur suhu tubuh mereka dan mengeluarkan cairan berlebih. Kelenjar keringat juga mencegah tumbuhnya bakteri di kulit.',
            'image_path' => $image_path.'kelenjar-keringat.jpg',
            'prerequisite_id' => 32,
            'price' => 1,
            'percentage' => 1.95
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Kelenjar susu',
            'description' => 'Kelenjar susu berevolusi dari kelenjar keringat, dan bertanggung jawab untuk memproduksi susu untuk makanan anakan mamalia.',
            'image_path' => $image_path.'kelenjar-susu.png',
            'prerequisite_id' => 33,
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Gigi mamalia',
            'description' => 'Dengan diet mamalia yang berubah menjadi lebih kompleks, gigi-gigi spesial muncul dan membantu diferensiasi spesies baru.',
            'image_path' => $image_path.'gigi-mamalia.png',
            'price' => 1,
            'percentage' => 1.25
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Langit-langit mulut',
            'description' => 'Munculnya langit-langit mulut yang terbagi atas bagian yang keras dan lembek, memungkinkan organisme untuk makan dan bernafas disaat yang sama. Hal ini memungkinkan metabolisme yang lebih cepat.',
            'image_path' => $image_path.'langit-langit-mulut.png',
            'prerequisite_id' => 35,
            'price' => 1,
            'percentage' => 1.65
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Uterus',
            'description' => 'Uterus adalah organ tempat fetus berkembang. Uterus merupakan tempat telur yang sudah terfertilisasi berkembang hingga siap dilahirkan.',
            'image_path' => $image_path.'uterus.jpg',
            'price' => 1,
            'percentage' => 3.0
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Eutheria',
            'description' => 'Eutheria adalah mamalia yang mengandung anakannya di dalam uterus dan dibungkus dengan plasenta. Hal ini menyebabkan kehamilan yang lebih panjang, manusia adalah eutheria.',
            'image_path' => $image_path.'eutheria.jpg',
            'prerequisite_id' => 37,
            'price' => 1,
            'percentage' => 1.6
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Otak mamalia',
            'description' => 'Dengan berkembangnya sistem limbik di otak mamalia, mamalia mempunyai kemampuan untuk merasakan emosi yang lebih kompleks dari reptil. Evolusi ini juga meningkatkan memori mamalia sehingga dapat belajar dari kejadian-kejadian.',
            'image_path' => $image_path.'otak-mamalia.jpg',
            'prerequisite_id' => 38,
            'price' => 1,
            'percentage' => 1.45
        ]);
        
        Evolution::create([
            'species_id' => 6,
            'name' => 'Plasenta',
            'description' => 'Plasenta adalah organ sementara yang menghubungkan embrio dengan uterus. Melalui organ ini, induk menyediakan nutrisi serta oksigen dan membuang hasil metabolisme dari fetus.',
            'image_path' => $image_path.'plasenta.jpg',
            'prerequisite_id' => 38,
            'price' => 1,
            'percentage' => 1.5
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Primata',
            'description' => 'Evolusi dari mamalia pemanjat pohon, primata adalah binatang dengan otak besar serta tangan yang lincah. Mereka berevolusi dengan diversitas yang kompleks, makhluk seperti gorila hingga lemur bahkan manusia adalah primata.',
            'image_path' => $image_path.'primata.jpg',
            'prerequisite_id' => 38,
            'price' => 1,
            'percentage' => 1.75
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Lobus penciuman',
            'description' => 'Mamalia mempunyai lobus penciuman yang banyak dan besar, bagian ini merupakan bagian dari otak yang mengatur indra penciuman. Hal ini ikut berkontribusi terhadap besarnya otak mamalia secara keseluruhan.',
            'image_path' => $image_path.'lobus-penciuman.jpg',
            'prerequisite_id' => 39,
            'price' => 1,
            'percentage' => 1.4
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Kehamilan panjang',
            'description' => 'Eutherian mengandung anakan mereka hingga mereka lebih berkembang daripada mamalia lainnya. Hal ini memungkinkan beberapa anakan dapat berjalan atau bahkan berlari dalam hitungan jam setelah lahir.',
            'image_path' => $image_path.'kehamilan-panjang.jpg',
            'prerequisite_id' => 40,
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 6,
            'name' => 'Estrus',
            'description' => 'Pada kebanyakan mamalia (terkecuali mamalia tingkat tinggi), sang betina akan mengalami siklus estrus. Siklus estrus adalah sebuah periode dimana betina lebih aktif secara seksual dan lebih subur. Karena siklus ini, kebanyakan mamalia hanya dapat bereproduksi dalam kurun waktu tertentu selama setahun.',
            'image_path' => $image_path.'estrus.jpg',
            'prerequisite_id' => 42,
            'price' => 1,
            'percentage' => 3.0
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Tengkorak berkubah',
            'description' => 'Primata memiliki otak yang lebih besar daripada kebanyakan binatang lainnya. Tengkorak mereka yang unik menyediakan lebih banyak ruang untuk otak mereka yang besar. Tengkorak mereka juga melindungi otak mereka dari cedera eksternal.',
            'image_path' => $image_path.'tengkorak-berkubah.png',
            'prerequisite_id' => 39,
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Tangan berjari 5',
            'description' => 'Tangan primata memiliki 5 jari, termasuk ibu jari yang berlawanan. Tangan primata berevolusi secara spesifik untuk dapat mencengkeram dan mempunyai kemampuan motorik yang baik yang memungkinkan primata untuk menggunakan alat.',
            'image_path' => $image_path.'tangan-berjari-5.png',
            'prerequisite_id' => 41,
            'price' => 1,
            'percentage' => 1.9
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Otak kera',
            'description' => 'Otak mamalia berkembang lebih besar dan lebih kompleks daripada otak kebanyakan mamalia. Hal ini memberikan primata kelebihan dibandingkan makhluk lain.',
            'image_path' => $image_path.'otak-kera.png',
            'prerequisite_id' => 39,
            'price' => 1,
            'percentage' => 1.8
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Neocortex',
            'description' => 'Neocortex adalah bagian dari otak yang mengendalikan penglihatan dan pendengaran pada mamalia, memberikan mereka kelebihan evolusi dibandingkan makhluk lain.',
            'image_path' => $image_path.'neocortex.png',
            'prerequisite_id' => 47,
            'price' => 1,
            'percentage' => 2.5
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Bipedal',
            'description' => 'Kemampuan untuk berjalan diatas 2 kaki dibandingkan 4 kaki. Hal ini memungkinkan tangan untuk digunakan untuk fungsi lain selain berjalan.',
            'image_path' => $image_path.'bipedal.jpg',
            'price' => 1,
            'percentage' => 2.0
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Ekor Vestigial',
            'description' => 'Karena primata menjadi bipedal, mereka tidak lagi memerlukan ekor untuk menjaga keseimbangan. Hal ini mengakibatkan ekor pada tulang belakang mereka lama-kelamaan mengecil dan akhirnya menghilang. Sisa dari evolusi organ ini merupakan tulang ekor yang berada pada ujung tulang belakang manusia.',
            'image_path' => $image_path.'ekor-vestigial.png',
            'prerequisite_id' => 49,
            'price' => 1,
            'percentage' => 2.3
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Ibu jari yang berlawanan',
            'description' => 'Perkembangan ibu jari mengakibatkan meningkatnya akurasi dalam mencengkeram, memungkinkan primata untuk mengambil dan menggunakan objek-objek.',
            'image_path' => $image_path.'ibu-jari-yang-berlawanan.jpg',
            'prerequisite_id' => 49,
            'price' => 1,
            'percentage' => 1.55
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Australopithecus',
            'description' => 'Australopithecus dipercaya merupakan evolusi pertama primata yang mengarah kepada evolusi manusia. Sisa-sisa tengkorak australopithecus yang diberi nama Lucy, ditemukan pertama kali pada tahun 1974 di Ethiopia.',
            'image_path' => $image_path.'australopithecus.jpg',
            'prerequisite_id' => 47,
            'price' => 1,
            'percentage' => 1.8
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Homo Habilis',
            'description' => 'Homo habilis merupakan spesies primata pertama dengan genus Homo, diketahui untuk menggunakan alat batu primitif.',
            'image_path' => $image_path.'homo-habilis.jpg',
            'prerequisite_id' => 52,
            'price' => 1,
            'percentage' => 2.75
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Sendi pergelangan tangan',
            'description' => 'Sendi pergelangan tangan yang lebih fleksibel memungkinkan penggunaan tangan yang lebih kompleks, memudahkan untuk menciptakan alat-alat dan menggunakannya. Pergelangan tangan manusia merupakan sendi kondiloid, yang memungkinkan gerakan sirkular, fleksi dan ekstensi.',
            'image_path' => $image_path.'sendi-pergelangan-tangan.jpg',
            'prerequisite_id' => 53,
            'price' => 1,
            'percentage' => 2.5
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Homo Erectus',
            'description' => 'Homo Erectus adalah spesies dari Genus Homo yang sepenuhnya bipedal, merupakan leluhur langsung dari manusia modern.',
            'image_path' => $image_path.'homo-erectus.jpg',
            'prerequisite_id' => 53,
            'price' => 1,
            'percentage' => 3.0
        ]);

        Evolution::create([
            'species_id' => 7,
            'name' => 'Ketahanan berburu',
            'description' => 'Beberapa predator berburu dengan menyelinap, yang lain racun, dan ada juga yang menggunakan jebakan. Tetapi Homo Erectus lebih memilih untuk mengejar terus buruan mereka hingga buruan mereka kelelahan dan tidak dapat lagi berlari.',
            'image_path' => $image_path.'ketahanan-berburu.jpg',
            'prerequisite_id' => 55,
            'price' => 1,
            'percentage' => 2.4
        ]);

        Evolution::create([
            'species_id' => 8,
            'name' => 'Menstruasi',
            'description' => 'Pada kebanyakan mamalia, lapisan rahim akan diserap kembali pada akhir siklus reproduksi. Namun pada beberapa primata seperti manusia, lapisan tersebut akan mengelupas dan dikeluarkan dari tubuh dalam bentuk darah. Makhluk yang mengalami menstruasi dapat hamil kapanpun tanpa harus menunggu siklus reproduksi seperti estrus.',
            'image_path' => $image_path.'menstruasi.png',
            'price' => 1,
            'percentage' => 3.0
        ]);

        Evolution::create([
            'species_id' => 8,
            'name' => 'Otak manusia',
            'description' => 'Primata memiliki otak yang lebih besar daripada kebanyakan binatang lainnya. Tengkorak mereka yang unik menyediakan lebih banyak ruang untuk otak mereka yang besar. Tengkorak mereka juga melindungi otak mereka dari cedera eksternal.',
            'image_path' => $image_path.'otak-manusia.jpg',
            'prerequisite_id' => 57,
            'price' => 1,
            'percentage' => 6.0
        ]);
    }
}
