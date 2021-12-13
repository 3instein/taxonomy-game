<?php

namespace Database\Seeders;

use App\Models\UserCreature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCreatureSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        UserCreature::create([
            'student_id' => 1,
            'species_id' => 1,
            'amount' => 1
        ]);

        UserCreature::create([
            'student_id' => 1,
            'species_id' => 2,
            'amount' => 1
        ]);

        foreach (range(1, 6) as $index) {
            DB::table('user_creatures_evolutions')->insert([
                'user_creature_id' => rand(1, 2),
                'creature_evolution_id' => $index
            ]);
        }
    }
}
