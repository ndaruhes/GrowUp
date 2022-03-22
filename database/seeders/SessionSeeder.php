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
            ['Perkenalan NodeJS (Sintaks, Variabel, Dll)', 'Di pertemuan pertama kita akan berkenalan dengan NodeJS, mempelajari sintaks, dan cara menulis variabel', 'https://meet.google.com/cuw-pkau-iux', 'contoh_microservicesmonolithic (1)-CBUbGV4QSR-20220321044331.pdf', '2022-07-24', '09:30', '1'],
            ['Perkenalan MongoDB (Table, Query)', 'Di pertemuan kedua kita akan berkenalan dengan MongoDB sekaligus belajar membuat table dan menjalankan query', 'https://meet.google.com/bgh-bckj-ghd', 'contoh_microservicesmonolithic-iUf7OFpkHS-20220321044412.pdf', '2022-07-25', '10:30', '1'],
            ['Perkenalan MongoDB (Table, Query)', 'Di pertemuan kedua kita akan berkenalan dengan MongoDB sekaligus belajar membuat table dan menjalankan query', 'https://meet.google.com/bgh-bckj-ghd', 'contoh_microservicesmonolithic-iUf7OFpkHS-20220321044412.pdf', '2022-07-27', '08:30', '1'],
            ['Perkenalan MongoDB (Table, Query)', 'Di pertemuan kedua kita akan berkenalan dengan MongoDB sekaligus belajar membuat table dan menjalankan query', 'https://meet.google.com/bgh-bckj-ghd', 'contoh_microservicesmonolithic-iUf7OFpkHS-20220321044412.pdf', '2022-07-30', '12:30', '1']
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
