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

        ClassModel::create([
            'phylum_id' => 4,
            'name' => 'Agnatha'
        ]);

        ClassModel::create([
            'phylum_id' => 4,
            'name' => 'Stegocephalia'
        ]);
        
        ClassModel::create([
            'phylum_id' => 4,
            'name' => 'Gnathostomata'
        ]);

        ClassModel::create([
            'phylum_id' => 4,
            'name' => 'Mammalia'
        ]);
    }
}
