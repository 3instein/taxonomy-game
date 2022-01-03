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
            'name' => 'Porifera'
        ]);

        ClassModel::create([
            'phylum_id' => 2,
            'name' => 'Tentaculata'
        ]);

        ClassModel::create([
            'phylum_id' => 3,
            'name' => 'Turbellaria'
        ]);
    }
}
