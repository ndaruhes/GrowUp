<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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

        return view('pages.explore', $data);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function cleanString($str)
    {
        $str = str_replace(' ', '', $str);
        return strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $str));
    }
}
