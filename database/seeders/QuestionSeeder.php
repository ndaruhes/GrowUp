<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            ['1', '5', 'Port Tidak Ditemukan', 'Kenapa saat saya menjalankan nodemon app.js tetapi port tidak ditemukan?'],
            ['1', '6', 'Kegunaan Dari HTTP Request', 'Kenapa Http Request tidak berjalan?'],
            ['2', '5', 'Unknown node compiler', 'Halo, kenapa ada error node compiler ya?'],
            ['3', '6', '"Port 3000 was running" Tapi Error', 'Sesuai judul, tapi kenapa app nya tidak bisa dijalankan?'],
            ['4', '5', 'File Build Failed', 'Kenapa ketika menjalankan filenya lalu app memberi pesan error seperti pada judul?']
        ];

        foreach ($questions as $question) {
            Question::create([
                'forum_id' => $question[0],
                'user_id' => $question[1],
                'title' => $question[2],
                'content' => $question[3]
            ]);
        }
    }
}
