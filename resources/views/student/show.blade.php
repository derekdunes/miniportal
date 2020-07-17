@extends('layouts.blackApp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div >


                <table class="table table-dark">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Level</th>
                            <th scope="col">Reg. No</th>
                            <th scope="col">View more</th>
                            <!-- <th scope="col">Course</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ \Carbon\Carbon::parse($student->birth_day)->format('d-m-Y') }}</td>
                            <td>{{ $student->level->level_name }}</td>
                            <td>{{ $student->reg_no }}</td>
                            <td><a href="{{ route('student.show', $student->id)}}">See more</a></td>

                            </tr>

                        @foreach($student->courses as $course)
                            <tr>
                                <td><a href="{{ route('course.show', $course->id) }}">{{ $course->course_name }}</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <div>
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-lg btn-secondary">Edit Student</a>
        
                    <a href="{{ route('student.destroy',$student->id) }}" class="btn btn-lg btn-danger">Delete Student</a>
                </div>

        </div>
    </div>
</div>
@endsection
