@extends('layouts.blackApp')

@section('content')

<div class="container">

     <form class="" role="form" method="POST" action="{{ route('course.store') }}">
      
        {{ csrf_field() }}

         <div class="row">
            <div class="col-md-12">
                <div class="">
                <h3 class="">Create a new Course </h3>
                    </div>
                    <div class="">
                            <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Course Name</label>
                                      <input id="course_name" name="course_name" class="form-control" placeholder="Course Name" value="" type="text" required>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Credit Load</label>
                                        <input  id="Credit_load" name="credit_load" class="form-control" placeholder="" value="" type="number" min="1" max="6">
                                      </div>
                                  </div>                                    
                </div>
        </div>
        
        <div class="card-footer text-right">
                <div class="d-flex">
                  <a href="{{ route('course.index') }}" class="btn btn-link">Cancel</a>
                  <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                </div>
        </div>

   
    
    </div>
  </div>
</form>

@endsection
