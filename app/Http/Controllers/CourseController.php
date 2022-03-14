<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\CourseModel;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index', [
            'categories' => CategoryController::getAll()
        ]);
    }

    public function store()
    {
        return view('courses.create');
    }

    public function createCourse(Request $data)
    {
        CourseModel::create([
            'course_name' => $data->course_name,
            'mentor_id' => Auth::user()->id,
            'category_id' => $data->category_id
        ]);
        return redirect()->back();
    }

    public function deleteCourse($id)
    {
        CourseModel::find($id)->delete();
        return redirect()->back();
    }

    public function updateCourse(Request $data, $id)
    {
        CourseModel::find($id)->update([
            'course_name' => $data->course_name,
            'category_id' => $data->category_id
        ]);
        return redirect(route('home'));
    }
}
