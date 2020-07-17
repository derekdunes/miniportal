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
                        @foreach($students as $student)
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
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <a href="{{ route('course.create') }}" class="btn btn-lg btn-secondary">Create Course</a>
        
                    <a href="{{ route('student.create') }}" class="btn btn-lg btn-dark">Add Student</a>
                </div>

        </div>
    </div>
</div>
@endsection
