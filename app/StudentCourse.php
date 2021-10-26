<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    public function student() {
        $this->belongsTo('App\Student')->withDefault();;
    }

    public function course() {
        $this->belongsTo('App\Course')->withDefault();;
    }
}
