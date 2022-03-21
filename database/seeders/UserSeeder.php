<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['Muhamad Ndaru', 'ndaru@gmail.com', 'Mentor', '12345678'],
            ['Vaness', 'vaness@gmail.com', 'Mentee', '12345678'],
            ['Albert Barnabas', 'albert@gmail.com', 'Mentee', '12345678']
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'role' => $user[2],
                'password' => Hash::make($user[3])
            ]);
        }
    }
}
