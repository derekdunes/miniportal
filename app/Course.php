<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    	//tested
    public function students(){

        return $this->belongsToMany(Student::class, 'student_course', 'course_id', 'student_id');
    
    }
    
}
