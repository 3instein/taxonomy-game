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
            'question' => 'Molekul DNA yang mengandung materi genetik disebut',
            'answer' => 'Kromosom',
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
    }
}
