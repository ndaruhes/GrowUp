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
            // WEB DEVELOPMENT
            ['https://i.ibb.co/mHXjxYX/course-1.png', 'Membuat REST API Menggunakan ExpressJS & MongoDB', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', '450000', '2022-07-24', '2022-08-30', '30', '5', '7', '1'],
            ['https://i.ibb.co/RyPVv6Q/course-2.jpg', 'Full Stack Laravel Development: Framework Terbaik Masa Kini', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', '350000', '2022-04-29', '2022-05-29', '30', '3', '7', '2'],
            ['https://i.ibb.co/dKPxpsT/course-3.jpg', 'Tailwind CSS: Membuat Tampilan Website Menjadi Cantik', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', null, '2022-04-29', '2022-05-29', '30', '4', '7', '1'],
            ['https://i.ibb.co/VCwZNYd/course-4.png', 'PHP & MySQL Pemula: Belajar Dari Dasar Sampai Mahir', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', '150000', '2022-04-29', '2022-05-29', '30', '5', '7', '2']

            // CHINESE LANGUAGE
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
