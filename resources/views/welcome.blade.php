
@extends('layouts.blackApp')

@section('content')

    <h1 class="cover-heading">MiniPortal</h1>
    <p class="lead">Login or Register to start adding students and creating Courses</p>
    <p class="lead">
      <a href="{{ route('login') }}" class="btn btn-lg btn-secondary">Login</a>
        
        <a href="{{ route('register') }}" class="btn btn-lg btn-dark">Register</a>
    </p>

@endsection