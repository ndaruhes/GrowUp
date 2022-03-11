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
            'mentor_id' => Auth::user()->id,
            'category_id' => $data->category_id
        ]);
        return redirect()->back();
    }

    public function deleteCourse($id){
        CourseModel::find($id)->delete();
        return redirect()->back();
    }

    public function updateCourse($id){
        CourseModel::find($id)->delete();
        return redirect()->back();
    }
}
