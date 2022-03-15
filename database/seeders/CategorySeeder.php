<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['Data Analyst', 'Graphics Design', 'Accounting', 'Data Science', 'UI/UX Design', 'Mobile Developer'];
        for ($i = 0; $i < count($category); $i++) {
            Category::create([
                'title' => $category[$i]
            ]);
        }
    }
}
