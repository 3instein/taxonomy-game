<?php

namespace Database\Seeders;

use App\Models\ClassModel;
use Illuminate\Database\Seeder;

class ClassModelSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        ClassModel::create([
            'phylum_id' => 1,
            'name' => 'Mammalia'
        ]);

        ClassModel::create([
            'phylum_id' => 2,
            'name' => 'Clitellata'
        ]);

        ClassModel::create([
            'phylum_id' => 3,
            'name' => 'Magnoliopsida'
        ]);

        ClassModel::create([
            'phylum_id' => 4,
            'name' => 'Monocotyledoneae'
        ]);
    }
}
