<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Family::create([
            'order_id' => 1,
            'name' => 'Spongiidae'
        ]);

        Family::create([
            'order_id' => 2,
            'name' => 'Bolinopsidae'
        ]);
    }
}
