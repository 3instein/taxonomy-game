<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserSave;
use App\Models\UserStat;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //Admin Account
        $admin = User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@taxon.com',
            'email_verified_at' => now(),
            'school' => 'taxon',
            'city' => 'taxon',
            'birthyear' => '2002',
            'password' => bcrypt('root'),
        ]);

        UserStat::create([
            'student_id' => 1
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'username',
            'username' => 'user',
            'email' => 'user@taxon.com',
            'email_verified_at' => now(),
            'school' => 'taxon',
            'city' => 'taxon',
            'birthyear' => '2002',
            'password' => bcrypt('password'),
        ]);

        UserStat::create([
            'student_id' => 2
        ]);

        $user->assignRole('user');
    }
}
