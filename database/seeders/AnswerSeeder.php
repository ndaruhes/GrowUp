<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anwers = [
            ['1', '6', 'Itu karena kamu belum mensetting portnya menggunakan server.listen(5000)'],
            ['1', '5', 'Waduh my bad. Terima kasih kak atas bantuannya'],
            ['3', '5', 'Itu disebabkan karena kamu sedang menjalankan port yang sama di server lain'],
            ['3', '6', 'Ohh iya lupa makasih kakak hehehe :)']
        ];

        foreach ($anwers as $answer) {
            Answer::create([
                'question_id' => $answer[0],
                'user_id' => $answer[1],
                'content' => $answer[2]
            ]);
        }
    }
}
