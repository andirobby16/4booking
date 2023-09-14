<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    

    {{-- Font Awesome --}}
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- Navbar CSS load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/datepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('template/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('template/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('template/css/templatemo-style.css')}}">

    <title>Project Booking</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>
<body>
    {{-- Navbar --}}
    <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>    
        <div class="tm-top-bar" id="tm-top-bar">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg narbar-light">
                        @guest
                            <a class="navbar-brand mr-auto nav-link" href="/">
                                4Booking
                            </a>
                        @else
                            <a class="navbar-brand mr-auto nav-link" href="/home">
                                4Booking
                            </a>
                        @endguest
                        <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#services">Layanan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact Us</a>
                                </li>
                                <li class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif
            
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="margin-top:-1px">
                                                <a class="dropdown-item" href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ProfileModal">
                                                    {{ __('Profile') }}
                                                </a>
                                                <a class="dropdown-item" href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewBookingModal">
                                                    {{ __('Booking') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Log Out') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </li>
                            </ul>
                        </div>                            
                    </nav>
                </div>
            </div> 
        </div> 
    </div>

    @yield('content')
    
    {{-- Bootstrap script --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script> --}}

    <!-- Navbar load JS files -->
    <script src="{{asset('template/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>   
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/js/datepicker.min.js')}}"></script>
    <script src="{{asset('template/slick/slick.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.scrollTo.min.js')}}"></script>

    <script> 
        /* DOM is ready
        ------------------------------------------------*/
        $(function(){
            // Change top navbar on scroll
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 100) {
                    $(".tm-top-bar").addClass("active");
                } else {                    
                $(".tm-top-bar").removeClass("active");
                }
            });

            // Smooth scroll to search form
            $('.tm-down-arrow-link').click(function(){
                $.scrollTo('#tm-section-search', 300, {easing:'linear'});
            });

            // Date Picker in Search form
            var pickerCheckIn = datepicker('#inputCheckIn');
            var pickerCheckOut = datepicker('#inputCheckOut');

            $( function(){
                $(".datepicker").datepicker();
            })

            // Update nav links on scroll
            $('#tm-top-bar').singlePageNav({
                currentClass:'active',
                offset: 60
            });

            // Close navbar after clicked
            $('.nav-link').click(function(){
                $('#mainNav').removeClass('show');
            });

            // Slick Carousel
            $('.tm-slideshow').slick({
                infinite: true,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });      
        });
    </script> 
    
    @livewireScripts
    @yield('script')
    @include('sweetalert::alert')
</body>
</html>
