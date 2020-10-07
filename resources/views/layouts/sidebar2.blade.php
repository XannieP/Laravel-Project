<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Admin Panel</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <script src="https://kit.fontawesome.com/bc9099db51.js" crossorigin="anonymous"></script>

    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="bg-black">
                <div class="sidebar-header text-center">
                   <a href="/"> <h3> Admin Panel </h3> </a>
                </div>

                <ul class="list-unstyled components">
                    <li class="{{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                        <a href="/admin/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="{{ (request()->segment(2) == 'menu') ? 'active' : '' }}">
                        <a href="#menu" data-toggle="collapse" aria-expanded="false"><i class="fas fa-compass"></i> Menu</a>
                        <ul class="collapse list-unstyled" id="menu">
                            <li class="{{ (request()->segment(3) == 'logo') ? 'active' : '' }}">
                                <a href="/admin/menu/logo"><i class="fab fa-pied-piper-alt"></i> Logo</a>
                            </li>
                            <li class="{{ (request()->segment(3) == 'company_name') ? 'active' : '' }}">
                                <a href="/admin/menu/company_name"><i class="fas fa-building"></i> Company Name</a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ (request()->segment(2) == 'landing_page') ? 'active' : '' }}">
                        <a href="#Header" data-toggle="collapse" aria-expanded="false"><i class="fas fa-plane-arrival"></i> Landing Page</a>
                        <ul class="collapse list-unstyled" id="Header">
                            <li class="{{ (request()->segment(3) == 'background') ? 'active' : '' }}">
                                <a href="/admin/landing_page/background"><i class="far fa-image"></i> Background </a>
                            </li>
                            <li class="{{ (request()->segment(3) == 'text') ? 'active' : '' }}">
                                <a href="/admin/landing_page/text"><i class="far fa-file-alt"></i> Text </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ (request()->segment(2) == 'introduction') ? 'active' : '' }}">
                        <a href="#introduction" data-toggle="collapse" aria-expanded="false"><i class="fab fa-angellist"></i> Specialized</a>
                        <ul class="collapse list-unstyled" id="introduction">
                            <li class="{{ (request()->segment(3) == 'icons') ? 'active' : '' }}">
                                <a href="/admin/introduction/icons"><i class="fas fa-icons"></i> Icons </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ (request()->segment(2) == 'middle') ? 'active' : '' }}">
                        <a href="#Middle" data-toggle="collapse" aria-expanded="false"><i class="fas fa-align-center"></i> About</a>
                        <ul class="collapse list-unstyled" id="Middle">
                            <li class="{{ (request()->segment(3) == 'info') ? 'active' : '' }}">
                                <a href="/admin/middle/info"><i class="fas fa-info-circle"></i> Infromation </a>
                            </li>
                            <li class="{{ (request()->segment(3) == 'image') ? 'active' : '' }}">
                                <a href="/admin/middle/image"><i class="far fa-image"></i> Image </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ (request()->segment(2) == 'team') ? 'active' : '' }}">
                        <a href="#team" data-toggle="collapse" aria-expanded="false"><i class="fas fa-users"></i> Team</a>
                        <ul class="collapse list-unstyled" id="team">
                            <li class="{{ (request()->segment(3) == 'edit') ? 'active' : '' }}">
                                <a href="/admin/team/edit"><i class="fas fa-user-edit"></i> Edit </a>
                            </li>
                            <li class="{{ (request()->segment(3) == 'create') ? 'active' : '' }}">
                                <a href="/admin/team/create"><i class="fas fa-user-plus"></i> Create </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ (request()->segment(2) == 'partner') ? 'active' : '' }}">
                        <a href="#partner" data-toggle="collapse" aria-expanded="false"><i class="fas fa-user-tie"></i> Partner</a>
                        <ul class="collapse list-unstyled" id="partner">
                            <li class="{{ (request()->segment(4) == 'background') ? 'active' : '' }}">
                                <a href="/admin/partner/go/background"><i class="far fa-image"></i> Background </a>
                            </li>
                            <li class="{{ (request()->segment(4) == 'edit') ? 'active' : '' }}">
                                <a href="/admin/partner/go/edit"><i class="fas fa-user-edit"></i> Edit </a>
                            </li>
                            <li class="{{ (request()->segment(4) == 'create') ? 'active' : '' }}">
                                <a href="/admin/partner/go/create"><i class="fas fa-user-plus"></i> Create </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ (request()->segment(2) == 'contact') ? 'active' : '' }}">
                        <a href="#contact" data-toggle="collapse" aria-expanded="false"><i class="fas fa-mobile-alt"></i> Contact</a>
                        <ul class="collapse list-unstyled" id="contact">
                            <li class="{{ (request()->segment(2) == 'background') ? 'active' : '' }}">
                                <a href="/admin/contact/select"><i class="fas fa-hand-pointer"></i> Select </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Help</a></li>
                                <li>
                                    <a class="dropdown-toggle removecaret" data-toggle="dropdown">
                                      {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        @guest
                                            <li class="">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))

                                            @endif
                                        @else
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Uitloggen') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endguest
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                        <main class="py-4">
                            @yield('content')
                        </main>

                        <footer class="text-center"> &copy; {{ now()->year }} Admin </footer>
            </div>
        </div>





        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    </body>
</html>
