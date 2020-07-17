
@extends('layouts.app')

@section('content')

<div class="container">
    <form class="card" role="form" method="POST" action="{{ route('student.update', $student->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        
        {{ csrf_field() }}

         <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                <h3 class="card-title">Editing Student : {{ $student->first_name }} {{ $student->last_name }}</h3>
                    </div>
                    <div class="card-body">
                            <div class="row">

                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                      <label class="form-label">Profile Image</label>
                                      <input  id="image" type="file" name="image" class="form-control" placeholder="Profile Image"  accept="image/*" >
                                    </div>
                              </div>

                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">First Name</label>
                                      <input id="name" name="first_name" class="form-control" placeholder="First Name" value="{{ $student->first_name }}" type="text" autofocus>
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                      <input id="name" name="last_name" class="form-control" placeholder="Last Name" value="{{ $student->last_name }}" type="text" autofocus>
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Email address</label>
                                        <input  id="release_date" name="email" class="form-control" placeholder="johndoe@example.com" value="{{ $student->email }}" type="email">
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input  id="release_date" name="birth_day" class="form-control" placeholder="Date of birth" value="{{ \Carbon\Carbon::parse($student->birth_day)->format('Y-m-d') }}" type="date">
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Registration Number</label>
                                      <input id="name" name="reg_no" class="form-control" placeholder="Esut/2020/123456" value="{{ $student->reg_no }}" type="text" autofocus>
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label class="form-label">Level</label>
                                        <select id="level" name="level" class="form-control custom-select">
                                          @foreach($levels as $level)

                                            @if($student->level_id == $level->id)
                                              <option value="{{$level->id}}" selected="selected">{{ $level->level_name }}</option>    
                                            @else
                                              <option value="{{$level->id}}">{{$level->level_name}}</option>
                                            @endif

                                          @endforeach
                                        </select>
                                      </div>
                                </div>


                            <div class="col-sm-6 col-md-4"> 
                              <div class="form-group">
                                <label for="name" class="form-label">Select the Courses</label><br>

                                      @php 
                                      $count = 0
                                    @endphp
                                    @foreach($courses as $course)
                                      @foreach($student->courses as $cen)                                          
                                            @if($course->id == $cen->id)
                                                @if($course->id % 4 == 0)
                                                  <input type="checkbox" name="courses[]" value="{{ $course->id }}" checked> Course Name:
                                              {{ $course->course_name  }} / Credit Load: {{ $course->credit_load  }} <br>
                                                @else
                                                  <input type="checkbox" name="courses[]" value="{{ $course->id }}" checked> Course Name:
                                              {{ $course->course_name  }} / Credit Load: {{ $course->credit_load  }}
                                                @endif
                                                @php 
                                                  $count = 1;
                                                  break;
                                                @endphp                                                
                                            @endif
                                      @endforeach
                                      
                                      @if($count == 1)
                                        @php 
                                          $count = 0
                                        @endphp
                                      @else
                                        @if($course->id % 4 == 0)
                                          <input type="checkbox" name="courses[]" value="{{ $course->id }}"> Course Name:
                                              {{ $course->course_name  }} / Credit Load: {{ $course->credit_load  }} <br>
                                        @else
                                          <input type="checkbox" name="courses[]" value="{{ $course->id }}"> Course Name:
                                              {{ $course->course_name  }} / Credit Load: {{ $course->credit_load  }}
                                        @endif
                                      @endif
                                    @endforeach

                              </div>
                            </div>
                </div>                 
            </div>
        </div>
        
        <div class="card-footer text-right">
                <div class="d-flex">
                  <a href="{{ route('student.index') }}" class="btn btn-link">Cancel</a>
                  <button type="submit" class="btn btn-primary ml-auto">Update</button>
                </div>
        </div>

    </div>
</form>

</div>
  
@endsection





