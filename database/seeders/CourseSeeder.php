<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            ['WhatsApp Image 2022-03-13 at 20.11.56 (1)-iJWGigJu9O-20220321044222.jpeg', 'Membuat REST API Menggunakan ExpressJS', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', null, '7', '1', null, null]
        ];

        foreach ($courses as $course) {
            Course::create([
                'cover' => $course[0],
                'title' => $course[1],
                'description' => $course[2],
                'price' => $course[3],
                'category_id' => $course[4],
                'mentor_id' => $course[5],
                'started_at' => $course[6],
                'ended_at' => $course[7],
            ]);
        }
    }
}
