@extends('layouts.app')

@section('content')

<div class="container">

     <form class="card" role="form" method="POST" action="{{ route('course.store') }}">
      
        {{ csrf_field() }}

         <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                <h3 class="card-title">Create a new Course </h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Course Name</label>
                                      <input id="course_name" name="course_name" class="form-control" placeholder="Course Name" value="" type="text" required>
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-md-6">
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
