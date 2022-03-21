<?php

namespace App\Http\Controllers;


use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('mentor_id', Auth::user()->id)->get();
        return view('courses.index', [
            'courses' => $courses,
            'categories' => CategoryController::index()
        ]);
    }

    public function searchCourse(Request $request)
    {
        $request->validate(['search' => 'required']);
        $searchedCourses = Course::where('title', 'like', '%' . $request->search . '%')->get();
        return view('pages.search', [
            'searchedCourses' => $searchedCourses,
            'categories' => CategoryController::index()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'cover' => 'required',
            'title' => 'required|string|min:3|max:100',
            'description' => 'required|string|min:5|max:500',
            'category' => 'required|numeric'
        ]);

        $files = $request->file('cover');
        $fullFileName = $files->getClientOriginalName();
        $fileName = pathinfo($fullFileName)['filename'];
        $extension = $files->getClientOriginalExtension();
        $cover = $fileName . "-" . Str::random(10) . "-" . date('YmdHis') . "." . $extension;
        $files->storeAs('public/images/cover', $cover);

        Course::create([
            'cover' => $cover,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'mentor_id' => Auth::user()->id,
            'category_id' => $request->category
        ]);

        return redirect()->back()->with('success_message', 'Yeyy, Kelasmu berhasil dibuat');
    }

    public function show($id)
    {
        $url = explode('/', url()->current());
        $course = Course::findOrFail($id);
        return view('courses.show', [
            'course' => $course,
            'sessions' => (new SessionController)->getAll(end($url))
        ]);
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', [
            'course' => $course,
            'categories' => CategoryController::index(),
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->file('cover') == null) {
            $request->validate([
                'title' => 'required|string|min:3|max:100',
                'description' => 'required|string|min:5|max:500',
                'category' => 'required|numeric'
            ]);
            $course = Course::findOrFail($id);
            $course->update([
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description,
                'category_id' => $request->category
            ]);

            return redirect('/mentor/courses')->with('success_message', 'Yeyy, Kelasmu berhasil diubah');
        } else {
            $request->validate([
                'cover' => 'required',
                'title' => 'required|string|min:3|max:100',
                'description' => 'required|string|min:5|max:500',
                'category' => 'required|numeric'
            ]);

            $files = $request->file('cover');
            $fullFileName = $files->getClientOriginalName();
            $fileName = pathinfo($fullFileName)['filename'];
            $extension = $files->getClientOriginalExtension();
            $cover = $fileName . "-" . Str::random(10) . "-" . date('YmdHis') . "." . $extension;
            $files->storeAs('public/images/cover', $cover);

            $course = Course::findOrFail($id);
            if (Storage::exists('public/images/cover/' . $course->cover)) {
                Storage::delete('public/images/cover/' . $course->cover);
            }

            $course->update([
                'cover' => $cover,
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description,
                'category_id' => $request->category
            ]);

            return redirect('/mentor/courses')->with('success_message', 'Yeyy, Kelasmu berhasil diubah');
        }
    }

    public function delete($id)
    {
        $course = Course::findOrFail($id);
        if (Storage::exists('public/images/cover/' . $course->cover)) {
            Storage::delete('public/images/cover/' . $course->cover);
        }
        $course->delete();

        return redirect('/mentor/courses')->with('success_message', 'Yeyy, Kelasmu berhasil dihapus');
    }
}
