<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <title>Hotel Himara - Hotel HTML Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="images/favicon.png">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.mmenu.css')}}">
    <link rel="stylesheet" href="{{asset('revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- ========== ICON FONTS ========== -->
    <link href="{{asset('fonts/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/flaticon.css')}}" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
</head>
<!-- ========== TOP MENU ========== -->
<div class="topbar">
    <div class="container">
        <div class="welcome-mssg">
            Welcome to Hotel Himara.
        </div>
        <div class="top-right-menu">
            <ul class="top-menu">
                <li class="d-none d-md-inline">
                    <a href="tel:+18881234567">
                        <i class="fa fa-phone"></i>+1 888 123 4567
                    </a>
                </li>
                <li class="d-none d-md-inline">
                    <a href="mailto:contact@hotelhimara.com">
                        <i class="fa fa-envelope-o "></i>contact@hotelhimara.com</a>
                </li>
            </ul>
        </div>
    </div>
</div>





<!-- ========== HEADER ========== -->
<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <!-- BRAND -->
        <div class="brand">
            <div class="logo">
                <a href="/">
                    <img src="{{$navlogo->url}}" alt="Hotel Himara">
                </a>
            </div>
        </div>
        <!-- MOBILE MENU BUTTON -->
        <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <!-- MAIN MENU -->
        <nav id="main-menu" class="main-menu">
            <ul class="menu">
                <li class="menu-item dropdown @if(request()->is('/'))active @endif">
                    <a href="/">HOME</a>
                </li>
                <li class="menu-item dropdown @if(request()->is('room'))active @endif">
                    <a href="/room">ROOMS</a>
                </li>
                <li class="menu-item dropdown @if(request()->is('staff'))active @endif">
                    <a href="/staff">TEAM</a>
                </li>
                <li class="menu-item dropdown @if(request()->is('blog'))active @endif">
                    <a href="/blog">BLOG</a>
                </li>
                <li class="menu-item dropdown @if(request()->is('gallery'))active @endif">
                    <a href="/gallery">GALLERY</a>
                </li>
                <li class="menu-item @if(request()->is('contact'))active @endif">
                    <a href="/contact">CONTACT US</a>
                </li>
                {{-- <li class="menu-item dropdown">
            <a href="#">ELEMENTS</a>
            <ul class="submenu">
              <li class="menu-item">
                <a href="/style/guide">Style Guide</a>
              </li>
              <li class="menu-item">
                <a href="/buttons">Buttons</a>
              </li>
              <li class="menu-item">
                <a href="/icons">Icons</a>
              </li>
            </ul>
          </li> --}}
                {{-- <li class="menu-item menu-btn">
                    <a href="{{ route('login') }}" class="btn">
                        <i class="fa fa-user"></i>
                        LOG IN</a>
                </li> --}}
                @auth
                <li class="menu-item menu-btn">
                    <a href="{{ url('/dashboard') }}" class="btn">
                        <i class="fa fa-user"></i>
                        Dashboard</a>
                </li>
                @else
                <li class="menu-item menu-btn">

                    <a href="{{ route('login') }}" class="btn">
                        <i class="fa fa-user"></i>
                        LOG IN</a>
                </li>
                @if (Route::has('register'))
                <li class="menu-item menu-btn">

                    <a href="{{ route('register') }}" class="btn">
                        <i class="fa fa-user"></i>
                        Register</a>                                                                                                                                                                                                                                                                                                                                                                       
                        @endif
                @endauth
                </li>
                {{-- @auth
                <a href="{{ url('/dashboard') }}"
                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth --}}

            </ul>
        </nav>
    </div>
</header>







{{--  --}}
