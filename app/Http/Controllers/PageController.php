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

    public function dashboard()
    {
        $user = Auth::user();
        $courses = Course::where('mentor_id', $user->id)->get();
        $transactions = $user->role == 'Mentor' ? Transaction::where('mentor_id', $user->id)->get() : Transaction::where('mentee_id', $user->id)->get();
        $salary = null;
        $totalMentor = null;
        if ($user->role == 'Mentor') {
            foreach ($transactions as $transaction) {
                $salary += $transaction->course->price;
            }
        }
        return view('pages.userHome', [
            'courses' => $courses,
            'categories' => CategoryController::index(),
            'transactions' => $transactions,
            'salary' => $salary,
            'totalMentor' => $totalMentor
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
        dd($data);
        return view('pages.explore', $data, [
            'categories' => $categories
        ]);
    }

    public function detailCourse($id)
    {
        $url = explode('/', url()->current());
        $course = Course::findOrFail($id);
        $transaction = Transaction::where('course_id', $id);
        return view('pages.detailCourse', [
            'course' => $course,
            'sessions' => (new SessionController)->getAll(end($url)),
            'transaction' => $transaction->get(),
            'hasTransaction' => Auth::user() ? $transaction->where('mentee_id', Auth::user()->id)->first() : null,
        ]);
    }

    public function courseCategory($id)
    {
        $courses = Course::where('category_id', $id)->get();
        return view('pages.courseCategory', [
            'courses' => $courses,
            'categories' => CategoryController::index(),
            'category' => CategoryController::show($id)
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function forum($id)
    {
        return view('pages.forum');
    }

    public function cleanString($str)
    {
        $str = str_replace(' ', '', $str);
        return strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $str));
    }
}
