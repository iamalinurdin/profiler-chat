<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Server2UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'adm1n1str4t0r',
                'password' => 'sagapungadmin1337',
            ],
            [
                'name' => 'ninja1',
                'password' => 'n1nja1member',
            ],
            [
                'name' => 'ninja2',
                'password' => 'n1nj42member',
            ],
            [
                'name' => 'ninja3',
                'password' => 'n1nj43_member',
            ],
            [
                'name' => 'ninja4',
                'password' => 'n1nj4_4member',
            ],
            [
                'name' => 'ninja5',
                'password' => 'n1nj45_m3mber',
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'username' => $user['name'],
                'email' => $user['name'] . '@gmail.com',
                'password' => Hash::make($user['password'])
            ]);
        }
    }
}
