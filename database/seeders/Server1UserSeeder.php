<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Server1UserSeeder extends Seeder
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
                'password' => 'b1n4ry_admin1337',
            ],
            [
                'name' => 'binary1',
                'password' => 'b1nary1member',
            ],
            [
                'name' => 'binary2',
                'password' => 'bin4ry2member',
            ],
            [
                'name' => 'binary3',
                'password' => 'b1n4ry3_member',
            ],
            [
                'name' => 'binary4',
                'password' => 'b1n4ry_4member',
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
