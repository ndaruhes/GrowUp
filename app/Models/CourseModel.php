<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'mentor_id',
        'category_id'
    ];

    protected $table = 'course';

    //Relationship
    public function category()
    {
        return $this->hasOne(CategoryModel::class, 'id', 'category_id');
    }
}
