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
        $categories = [
            ['https://i.ibb.co/JqCqz57/data-analyst.png', 'Data Analyst'],
            ['https://i.ibb.co/YT4WZTK/graphic-design.png', 'Graphic Design'],
            ['https://i.ibb.co/ZYKjMjV/accounting.png', 'Accounting'],
            ['https://i.ibb.co/TM5Fd0w/data-science.png', 'Data Science'],
            ['https://i.ibb.co/526GLFQ/ui-ux-design.png', 'UI/UX Design'],
            ['https://i.ibb.co/BcQLYbJ/mobile-development.png', 'Mobile Development'],
            ['https://i.ibb.co/yhY7vmJ/Group-17.png', 'Web Development'],
            ['https://i.ibb.co/NYf483C/Group-24.png', 'Business'],
            ['https://i.ibb.co/zJRzxxB/Group-26.png', 'Statistic'],
            ['https://i.ibb.co/CJg90r5/Group-18.png', 'Japanese Language'],
            ['https://i.ibb.co/60XwnsJ/Group-19.png', 'Chinese Language'],
            ['https://i.ibb.co/9vbZH82/Group-25.png', 'Mathematic']
        ];

        $description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it";

        foreach ($categories as $category) {
            Category::create([
                'icon' => $category[0],
                'title' => $category[1],
                'description' => $description
            ]);
        }
    }
}
