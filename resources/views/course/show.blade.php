@extends('layouts.blackApp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div >


                <table class="table table-dark">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Credit Load</th>

                            <!-- <th scope="col">Course</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                            <th scope="row">{{ $course->id }}</th>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->credit_load }}</td>

                            </tr>

                        @foreach($course->students as $student)
                            <tr>
                                <td><a href="{{ route('student.show', $student->id) }}">{{ $student->last_name }} {{ $student->first_name }}</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <div>
                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-lg btn-secondary">Edit Course</a>
        
                    <a href="{{ route('course.destroy',$course->id) }}" class="btn btn-lg btn-danger">Delete Course</a>
                </div>

        </div>
    </div>
</div>
@endsection
