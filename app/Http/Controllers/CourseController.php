<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Student;

class CourseController extends Controller
{
    
    public function index(){

		$course = Course::with('users')->all();

		return view('course.index', compact('course'));

	}

	public function create(){

		return view('course.create');
	}

	public function store(Request $req){

		$course = new Course();

		$name = $req->course_name;

		$creditLoad = $req->credit_load;

		if ($name) 
			$course->course_name = $name;

		if ($creditLoad)
			$course->credit_load = $creditLoad;

		$course->save();

		return view('course.index');
	}

	public function edit($id){

		$course = Course::find($id);

		return view('course.edit', compact('course'));
	}

	public function show($id){

		$course = Course::with('students')->find($id);

		return view('course.show', compact('course'));

	}

	public function update(Request $req, $id){

		$course = Course::findOrFail($id);

		$name = $req->course_name;

		$creditLoad = $req->credit_load;

		if ($name) 
			$course->course_name = $name;

		if ($creditLoad)
			$course->credit_load = $creditLoad;

		$course->save();

		return view('course.index');

	}

	public function destroy($id){

		$course = Course::with('users')->findOrFail($id);

		//remove all joins with courses
		$course->users()->detach($id);

		$course->delete();

		return view('course.index');
	}

}
