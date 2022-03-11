<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public static function getAll(){
        return CategoryModel::get();
    }
}
