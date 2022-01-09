<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //1st Biome
        Quiz::create([
            'question' => 'Molekul dengan properti unik replikasi diri adalah',
            'answer' => 'DNA',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'RNA bertanggung jawab untuk mentransfer kode genetik dari nukleus ke',
            'answer' => 'Ribosom',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'DNA dan RNA terbuat dari',
            'answer' => 'Nukleotida',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Molekul yang mempertahankan urutan genom yang memungkinkan sifat-sifat diturunkan dari induk ke anakan adalah',
            'answer' => 'Kromosom',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Organisme yang bereplikasi di dalam sel lain disebut',
            'answer' => 'Virus',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Atom dan molekul yang bergabung yang digunakan untuk membangun protein adalah',
            'answer' => 'Asam Amino',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Asam amino bergabung membentuk',
            'answer' => 'Polipeptida',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Protein digunakan untuk membentuk',
            'answer' => 'Sel',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Molekul yang mempertahankan urutan genom yang memungkinkan sifat-sifat diturunkan dari induk ke anakan adalah',
            'answer' => 'Kromosom',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Virus bereplikasi dengan cara masuk ke',
            'answer' => 'DNA',
            'point' => 10
        ]);

        //2nd biome

        Quiz::create([
            'question' => 'Jaringan adalah kumpulan',
            'answer' => 'Sel',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Jaringan yang memiliki kemampuan untuk berkotraksi disebut',
            'answer' => 'Otot',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Sistem saraf adalah',
            'answer' => 'jaringan sel yang mengirimkan stimuli melalui tubuh organisme dalam bentuk sinyal elektrik',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Jantung adalah organ yang didedikasikan untuk',
            'answer' => 'memompa darah dalam sebuah organisme',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Organisme berdarah dingin mengandalkan sumber panas eksternal untuk',
            'answer' => 'mengatur suhu tubuh',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Sirip merupakan prototipe',
            'answer' => 'kaki dan tangan',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Tali saraf membentuk',
            'answer' => 'sistem saraf sederhana',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Sistem saraf dikontrol oleh',
            'answer' => 'otak',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Knidosit adalah sel eksplosif yang digunakan sebagai',
            'answer' => 'senjata organik',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Titik pigmen memudahkan organisme untuk membedakan',
            'answer' => 'terang dan gelap',
            'point' => 10
        ]);
        
        //End game

        Quiz::create([
            'question' => 'Kaki berevolusi dari sirip untuk',
            'answer' => 'menahan beban badan',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Paru-paru berevolusi dari',
            'answer' => 'gelembung renang',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Sifat sisik dan kulit reptil yang memungkinkan reptil untuk hidup di daratan adalah',
            'answer' => 'epidermis hidrofobik',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Makhluk yang berdiri dan berjalan dengan empat kaki, disebut',
            'answer' => 'quadrupeds',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Organisme berdarah panas mempunyai kemampuan',
            'answer' => 'mengatur suhu tubuh mereka agar lebih tinggi daripada suhu lingkungan',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Telur memungkinkan reproduksi di',
            'answer' => 'luar lingkungan air',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Kulit yang tebal dan kuat serta dibungkus sisik memungkinkan reptil untuk',
            'answer' => 'hidup di daratan tanpa harus kembali ke air secara periodikal',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Ketika kulit reptil telah tumbuh lebih dari kulit lama mereka, mereka harus',
            'answer' => 'merontokkan kulit lama mereka',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Sistem saraf adalah',
            'answer' => 'jaringan sel yang mengirimkan stimuli melalui tubuh organisme dalam bentuk sinyal elektrik',
            'point' => 10
        ]);

        Quiz::create([
            'question' => 'Eutheria adalah',
            'answer' => 'mamalia yang mengandung anaknya di dalam uterus dan dibungkus dengan plasenta',
            'point' => 10
        ]);
    }
}
