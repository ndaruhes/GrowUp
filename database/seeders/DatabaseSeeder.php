<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
