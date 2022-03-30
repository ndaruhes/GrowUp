<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AnswerSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ForumSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
