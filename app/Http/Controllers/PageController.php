<?php

namespace App\Http\Controllers;

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
}
