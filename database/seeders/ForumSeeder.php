<?php

namespace Database\Seeders;

use App\Models\Forum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forums = [
            ['1', 'Tanya Jawab Pertemuan 1'],
            ['1', 'Tanya Jawab Pertemuan 2'],
            ['1', 'Tanya Jawab Pertemuan 3'],
            ['1', 'Tanya Jawab Pertemuan 4'],
            ['1', 'Tanya Jawab Pertemuan 5']
        ];

        foreach ($forums as $forum) {
            Forum::create([
                'course_id' => $forum[0],
                'title' => $forum[1]
            ]);
        }
    }
}
