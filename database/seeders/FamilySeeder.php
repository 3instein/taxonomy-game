<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\map;

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

        Family::create([
            'order_id' => 3,
            'name' => 'Dalyelliidae'
        ]);

        Family::create([
            'order_id' => 4,
            'name' => 'Myllokunmingiidae'
        ]);

        Family::create([
            'order_id' => 5,
            'name' => 'Acanthostegidae'
        ]);

        Family::create([
            'order_id' => 6,
            'name' => 'Morganucodontidae'
        ]);

        Family::create([
            'order_id' => 7,
            'name' => 'Proconsulidae'
        ]);

        Family::create([
            'order_id' => 7,
            'name' => 'Hominidae'
        ]);
    }
}
