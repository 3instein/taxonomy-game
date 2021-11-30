<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserSave;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Admin Account
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@taxon.com',
            'email_verified_at' => now(),
            'password' => bcrypt('root'),
        ]);

        UserSave::create([
            'user_id' => 1,
            'dna' => 0
        ]);
    }
}
