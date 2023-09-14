<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <title>Project Booking</title>

    <!-- Navbar CSS load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/datepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('template/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('template/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('template/css/templatemo-style.css')}}">

    @vite(['resources/js/app.js'])
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
                                <ul class="navbar-nav ms-auto">
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
                                                <a class="dropdown-item" href="/profile">
                                                    {{ __('Profile') }}
                                                </a>
                                                <a class="dropdown-item" href="/app1">
                                                    {{ __('Booking') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </ul>
                        </div>                            
                    </nav>
                </div>
            </div> 
        </div> 
    </div>

    <span id="about"></span>  
    <div class="tm-page-wrap mx-auto">
        {{-- Banner --}}
        <section class="tm-banner">
            <div class="tm-container-outer tm-banner-bg">
                <div class="container">
                    <div class="row tm-banner-row tm-banner-row-header">
                        <div class="col-xs-12">
                            <div class="tm-banner-header">
                                <h1 class="text-uppercase tm-banner-title">Let's begin</h1>
                                {{-- <a href="#services" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>        --}}
                            </div>    
                        </div>                     
                    </div>
                    <div class="row tm-banner-row" id="tm-section-search">
                        <section class="p-5 tm-container-outer">            
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                   
                                        <h2 class="text-uppercase mb-4 text-white"><strong>About Us</strong></h2>
                                        <p class="mb-4 text-white">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa, in tincidunt mi metus quis lectus. 
                                            Duis nec lobortis velit. Vivamus id magna vulputate, tempor ante eget, tempus augue. Maecenas ultricies neque magna.</p>                     
                                    </div>
                                </div>
                            </div>            
                        </section>
                    </div>
                    <div class="tm-banner-overlay"></div>
                </div>
            </div>               
            <span id="services"></span>
        </section>
        
        {{-- Layana/Services --}}
        <div class="tm-container-outer" id="services">
            <ul class="nav nav-pills tm-tabs-links">
                <li class="tm-tab-link-li">
                    <p class="tm-tab-link">
                        Layanan Event Yang Kami Berikan
                    </p>
                </li>
            </ul>
            <div class="tab-content clearfix">
                <!-- Tab 4 -->
                <div class="tab-pane fade show active">
                <!-- Current Active Tab WITH "show active" classes in DIV tag -->
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-file fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Project</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                            </div>
                            <a href="/login" class="tm-recommended-price-box">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a>                        
                        </div>
                        
                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Seminar</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                            </div>
                            <a href="/login" class="tm-recommended-price-box">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a>                        
                        </div>

                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-people-group fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Magang</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                            </div>
                            <a href="/login" class="tm-recommended-price-box"><p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-comments fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Konsultasi</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                            </div>
                            <a href="/login" class="tm-recommended-price-box"><p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a>
                        </div>    
                        <div class="tm-recommended-place">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-bars fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Event yang lainnya</h3>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                            </div>
                            <a href="/login" class="tm-recommended-price-box">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
                            </a>
                        </div>    
                    </div>
                </div> <!-- tab-pane -->
            </div>
        </div>

        {{-- Footer --}}
        <footer class="tm-container-outer py-4" id=contact>
            <div class="footer-col">
                <div class="footer_contact">
                  <h4 style="color: white">
                    Contact Us
                  </h4>
                    <div class="contact_link_box text-center pb-2" >
                        <a href="" class="px-2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Bandung
                        </a>
                        <a href="" class="px-2">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            4Bookingteam@gmail.com
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <a href="" class="p-2">
                    <i class="fa-brands fa-facebook fa-2xl"></i>
                </a>
                <a href="" class="p-2">
                    <i class="fa-brands fa-twitter fa-2xl"></i>
                </a>
                <a href="" class="p-2">
                    <i class="fa-brands fa-instagram fa-2xl"></i>
                </a>
              </div>
            <p class="mb-0 p-2">Copyright © <span class="tm-current-year">{{ date('Y') }}</span> 4Booking
        </footer>
    </div>


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

</body>
</html>