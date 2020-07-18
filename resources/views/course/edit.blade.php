@extends('layouts.app')

@section('content')

<div class="container">
    <form class="" role="form" method="POST" action="{{ route('course.update', $course->id) }}">
        <input type="hidden" name="_method" value="PUT">
        
        {{ csrf_field() }}
         <div class="row">
            <div class="col-md-12">
                <div class="">
                <h3 class="">Editing Course : {{ $course->course_name }}</h3>
                    </div>
                    <div class="">
                            <div class="row">

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Course Name</label>
                                      <input id="name" name="course_name" class="form-control" value="{{ $course->course_name }}" type="text" required>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Credit Load</label>
                                      <input id="name" name="credit_load" class="form-control" value="{{ $course->credit_load }}" type="number" min="1" max="6" autofocus>
                                      </div>
                                  </div>
                </div>                 
            </div>
        </div>
        
        <div class="card-footer text-right">
                <div class="d-flex">
                  <a href="{{ route('course.index') }}" class="btn btn-link">Cancel</a>
                  <button type="submit" class="btn btn-primary ml-auto">Update</button>
                </div>
        </div>

   
    
    </div>
</form>

</div>
  
@endsection


