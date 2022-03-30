<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function answer()
    {
        return $this->hasMany('App\Models\Answer', 'question_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
