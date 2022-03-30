<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $transactions = [
            ['1', '5', '1'],
            ['1', '6', '1'],
            ['2', '6', '2'],
            ['2', '5', '2'],
            ['8', '5', '4'],
            ['8', '6', '4'],
            ['8', '7', '4']
        ];

        foreach ($transactions as $transaction) {
            Transaction::create([
                'course_id' => $transaction[0],
                'mentee_id' => $transaction[1],
                'mentor_id' => $transaction[2]
            ]);
        }
    }
}
