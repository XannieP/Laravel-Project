<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">


    <script src="https://kit.fontawesome.com/bc9099db51.js" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>


</head>
<body>
    <div id="app" style="overflow-x: hidden;">
        <nav id="menu" class="navbar navbar-fixed-top home-nav navbar-expand-md navbar-light nav-index" style="z-index: 1000 !important;" style="overflow-x: hidden;">
            <div class="container-fluid font-weight-bold">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"> 

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                      @guest
                          <li class="">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>

                          <li class="">
                            <a class="nav-link" href="/register">{{ __('Register') }}</a>
                          </li>
                          @if (Route::has('register'))

                          @endif

                        @else
                                <a id="navbarDropdown" class=" nav-link navbar-brand navbar-fixed-text dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    @if (Auth::user()->admin == 1)

                                        <a class="dropdown-item" href="/">
                                            {{ __('Home') }}
                                        </a>

                                        <a class="dropdown-item" href="/admin/dashboard">
                                            {{ __('Dashboard') }}
                                        </a>

                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script type="text/javascript">
    
$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});


$(function () {
  $(document).scroll(function () {
    var $nav = $(".color");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

</script>

<script type="text/javascript">
$(document).ready(function(){
  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#back-to-top').fadeIn();
      } else {
        $('#back-to-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });
});
</script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
$(function() {
  AOS.init({
    duration: 1000, // values from 0 to 3000, with step 50ms
    });
});
</script>


</body>
</html>
