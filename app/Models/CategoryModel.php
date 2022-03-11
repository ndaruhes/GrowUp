<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'category_name'
    ];

    protected $table = 'category';
}
