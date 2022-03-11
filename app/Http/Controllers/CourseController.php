<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\CourseModel;

class CourseController extends Controller
{
    public function createCourse(Request $data){
        CourseModel::create([
            'course_name' => $data->course_name,
            'mentor_id' => Auth::user()->id
        ]);

        return redirect()->back();
    }
}
