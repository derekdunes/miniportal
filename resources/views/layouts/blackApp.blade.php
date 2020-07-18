<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Mini Portal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">

  </head>
  <body class="text-center">
    <div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand"><a href="{{ url('/')}}">MiniPortal</a></h3>
      <nav class="nav nav-masthead justify-content-center">
        @guest
             @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="nav-link active">Home</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Login</a>

                    @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                    @endif
                @endauth
            @endif
        @else

          <a class="nav-link" href="#" >
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
          </form>
        @endguest
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
  
      @yield('content')
  
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    </div>
  </footer>
</div>
</body>
</html>
