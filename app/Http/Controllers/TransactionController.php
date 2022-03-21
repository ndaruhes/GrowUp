<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function checkout($id)
    {
        $course = Course::findOrFail($id);
        Transaction::create([
            'course_id' => $course->id,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->back()->with('success_message', 'Yeyy, Kamu berhasil mendaftarkan kelasnya');
    }
}
