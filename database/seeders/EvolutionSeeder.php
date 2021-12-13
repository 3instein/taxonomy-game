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
            'description' => 'Kromosom adalah molekul DNA yang mengandung materi genetik. Kromosom mempertahankan urutan genom yang memungkinkan sifat-sifat di turunkan dari induk ke anakan.',
            'price' => 1
        ]);

        Evolution::create([
            'name' => 'Virus',
            'description' => 'Virus adalah agen biologi yang bereplikasi di dalam sel lain. Uniknya, jika bukan karena kemampuan virus untuk masuk ke DNA organisme, manusia mungkin tidak akan ada.',
            'prerequisite_id' => 1,
            'price' => 1
        ]);

        foreach(range(1, 2) as $index) {
            DB::table('user_evolutions')->insert([
                'student_id' => 1,
                'evolution_id' => $index
            ]);
        }
    }
}
