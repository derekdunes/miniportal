@extends('layouts.blackApp')

@section('content')

<div class="container">
     <form class="" role="form" method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
        
        {{ csrf_field() }}

         <div class="row">
            <div class="col-md-12">
                <div class="">
                <h3 class="">Create a new Student </h3>
                    </div>
                    <div class="">
                            <div class="row">

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">First Name</label>
                                      <input id="name" name="first_name" class="form-control" placeholder="First Name" value="" type="text" autofocus>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                      <input id="name" name="last_name" class="form-control" placeholder="Last Name" value="" type="text" autofocus>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Email address</label>
                                        <input  id="release_date" name="email" class="form-control" placeholder="johndoe@example.com" value="" type="email">
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input  id="release_date" name="birth_day" class="form-control" placeholder="Date of birth" value="" type="date">
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Registration Number</label>
                                      <input id="name" name="reg_no" class="form-control" placeholder="Esut/2020/123456" value="" type="text" autofocus>
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                      <div class="form-group">
                                        <label class="form-label">Level</label>
                                        <select id="level" name="level" class="form-control custom-select">
                                          @foreach($levels as $level)
                                            <option value="{{$level->id}}">{{$level->level_name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                </div>


                            <div class="col-md-4"> 
                              <div class="form-group">
                                <label for="name" class="form-label">Select the Courses</label><br>
                                      
                                      @foreach($courses as $course)

                                          @if($course->id % 4 == 0)
                                              <input type="checkbox" name="courses[]" value="{{ $course->id }}"> Course Name:
                                              {{ $course->course_name  }} / Credit Load: {{ $course->credit_load  }} <br>
                                          @else
                                              <input type="checkbox" name="courses[]" value="{{ $course->id }}"> Course Name: {{ $course->course_name }} / Credit Load:{{ $course->credit_load  }}
                                          @endif

                                      @endforeach

                              </div>
                            </div>
                                    
                </div>
        </div>
        
        <div class="card-footer text-right">
                <div class="d-flex">
                  <a href="{{ route('student.index') }}" class="btn btn-link">Cancel</a>
                  <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                </div>
        </div>

   
    
    </div>
  </div>

</form>

</div>

<script type="text/javascript">
  
      function ShowHideRole($casted, $roleId){

        if (!$($casted).is(":checked")) {

          //if checked set the input box to be enabled
          //assign roled[] as a value to the name attribute
          $($roleId).attr({"name":"", disabled:true});
          
          
        }else {

          //if not checked set the input box to be disabled
          //assign nothing as a value to the name attribute

          $($roleId).attr({"name":"roled[]", disabled:false});
        }
        
    }

</script>

</div>

@endsection

