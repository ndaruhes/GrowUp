<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'id');
    }

    public function mentee()
    {
        return $this->belongsTo('App\Models\User', 'mentee_id', 'id');
    }

    public function mentor()
    {
        return $this->belongsTo('App\Models\User', 'mentor_id', 'id');
    }
}
