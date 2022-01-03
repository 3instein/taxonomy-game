<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
