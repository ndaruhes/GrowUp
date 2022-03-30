<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['Muhamad Ndaru', 'ndaru@gmail.com', 'Mentor', '12345678'],
            ['Richard William', 'richard@gmail.com', 'Mentor', '12345678'],
            ['Astrid Dewi', 'astrid@gmail.com', 'Mentor', '12345678'],
            ['Vaness Barnabas', 'vaness@gmail.com', 'Mentor', '12345678'],
            ['Jonathan Jansen', 'jansen@gmail.com', 'Mentee', '12345678'],
            ['Albert Barnabas', 'albert@gmail.com', 'Mentee', '12345678'],
            ['Alex Rai', 'alex@gmail.com', 'Mentee', '12345678']
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
