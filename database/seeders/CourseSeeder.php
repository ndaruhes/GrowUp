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
            ['WhatsApp Image 2022-03-13 at 20.11.56 (1)-iJWGigJu9O-20220321044222.jpeg', 'Membuat REST API Menggunakan ExpressJS', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', null, '2022-04-29', '2022-05-29', '30', '5', '7', '1']
        ];

        foreach ($courses as $course) {
            Course::create([
                'cover' => $course[0],
                'title' => $course[1],
                'description' => $course[2],
                'price' => $course[3],
                'started_at' => $course[4],
                'ended_at' => $course[5],
                'max_mentee' => $course[6],
                'rating' => $course[7],
                'category_id' => $course[8],
                'mentor_id' => $course[9],
            ]);
        }
    }
}
