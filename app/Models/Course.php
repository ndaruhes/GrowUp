<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'mentor_id', 'id');
    }

    public function session()
    {
        return $this->hasMany('App\Models\Session', 'course_id');
    }

    public function transaction()
    {
        return $this->hasMany('App\Models\Transaction', 'course_id');
    }
}
