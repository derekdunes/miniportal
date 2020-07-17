<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Level;
use App\Course;

class StudentController extends Controller
{
    public function index(){

		return view('student.index');
	}

	public function create(){
		
		$levels = Level::all();

		$courses = Course::all();

		return view('student.create', compact('levels', 'courses'));

	}

	public function store(Request $req){

		$student = new Student();

		$firstName = $req->first_name;

		$lastName = $req->last_name;

		$email = $req->email;

		$birthDay = $req->birth_day;

		$level = $req->level;

		$regNo = $req->reg_no;

		if ($firstName) 
			$student->first_name = $firstName;

		if ($lastName) 
			$student->last_name = $lastName;

		if ($email)
			$student->email = $email;

		if ($birthDay)
			$student->birth_day = $birthDay;

		if ($level) 
			$student->level_id = $level;
		
		if ($regNo)
			$student->reg_no = $regNo;

		$student->save();

		//add courses
		 $courses = $req->courses;

        if(isset($courses) && count($courses) > 0)
        {
            foreach($courses as $course)
            {   
                $cour = Course::find($course);

                if ($cour) {
                    $student->Courses()->attach($cour);
                }
            }
            
        }

		return view('student.index');
	}

	public function show($id){

		$student = Student::with('level', 'courses')->findOrFail($id);

		return view('student.show', compact('student'));

	}

	public function edit($id){
		
		$student = Student::with('level', 'courses')->findOrFail($id);

		$levels = Level::all();

		$courses = Course::all();

		return view('student.edit', compact('levels', 'courses', 'student'));

	}


	public function update(Request $req, $id){

		$student = Student::findOrFail($id);

		$firstName = $req->first_name;

		$lastName = $req->last_name;

		$email = $req->email;

		$birthDay = $req->birth_day;

		$level = $req->level;

		$regNo = $req->reg_no;

		if ($firstName) 
			$student->first_name = $firstName;

		if ($lastName) 
			$student->last_name = $lastName;

		if ($email)
			$student->email = $email;

		if ($birthDay)
			$student->birth_day = $birthDay;

		if ($level) 
			$student->level_id = $level;
		
		if ($regNo)
			$student->reg_no = $regNo;

		$student->save();

		$courses = $req->courses;

        if(isset($courses) && count($courses) > 0)
        {
            $student->courses()->sync($courses);;
        }

		return view('student.index');

	}


	public function destroy($id){
		
		$user = Student::with('courses')->findOrFail($id);

		//remove all joins with courses
		$user->courses()->detach($id);

		$user->delete();

		return view('student.index');
	}

}
