<?php

namespace Database\Seeders;

use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
            ['Ipsum ea dolorem qu', 'Quia perferendis pro', 'https://iconscout.com/unicons/explore/line', 'contoh_microservicesmonolithic (1)-CBUbGV4QSR-20220321044331.pdf', '2022-07-24', '19:35', '1'],
            ['Sequi reiciendis vel', 'Cum est eius nobis n', 'https://getbootstrap.com/docs/5.1/components/accordion/', 'contoh_microservicesmonolithic-iUf7OFpkHS-20220321044412.pdf', '2024-03-28', '11:45', '1']
        ];

        foreach ($sessions as $session) {
            Session::create([
                'title' => $session[0],
                'description' => $session[1],
                'meeting_link' => $session[2],
                'resources' => $session[3],
                'schedule' => $session[4],
                'time' => $session[5],
                'course_id' => $session[6],
            ]);
        }
    }
}
