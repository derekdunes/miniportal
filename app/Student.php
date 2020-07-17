<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     
    //tested
    public function courses(){

        return $this->belongsToMany(Course::class, 'student_course', 'student_id', 'course_id');
    
    }

    public function level(){

        return $this->hasOne(Level::class, 'id');
    
    }
}
