<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public static function index()
    {
        return Category::all();
    }

    public static function show($id)
    {
        return Category::findOrFail($id);
    }
}
