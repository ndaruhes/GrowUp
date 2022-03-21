<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'categories' => CategoryController::index()
        ]);
    }

    public function profile()
    {
        return view('auth.profile', [
            'categories' => CategoryController::index()
        ]);
    }

    public function explore()
    {
        $categories = CategoryController::index();
        $data = null;
        foreach ($categories as $category) {
            $data[$this->cleanString($category->title)] = Course::where('category_id', $category->id)->get();
        }

        return view('pages.explore', $data, [
            'categories' => $categories
        ]);
    }

    public function detailCourse($id)
    {
        $url = explode('/', url()->current());
        $course = Course::findOrFail($id);
        $transaction = null;
        if (Auth::user()) {
            $transaction = Transaction::where('course_id', $id)->where('user_id', Auth::user()->id)->first();
        }
        return view('pages.detailCourse', [
            'course' => $course,
            'sessions' => (new SessionController)->getAll(end($url)),
            'hasTransaction' => $transaction
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function cleanString($str)
    {
        $str = str_replace(' ', '', $str);
        return strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $str));
    }
}
