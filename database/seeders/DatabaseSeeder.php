<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            DomainSeeder::class,
            KingdomSeeder::class,
            PhylumSeeder::class,
            ClassModelSeeder::class,
            OrderSeeder::class,
            FamilySeeder::class,
            GenusSeeder::class,
            SpeciesSeeder::class,
        ]);
    }
}
