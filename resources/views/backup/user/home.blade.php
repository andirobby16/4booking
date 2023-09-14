<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    {{-- Bootstrap CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>Journey HTML CSS Template</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/datepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('template/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('template/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('template/css/templatemo-style.css')}}">
</head>

<body>
    @include('layouts.navbar')
    <div class="tm-page-wrap mx-auto">
        {{-- Banner --}}
        <section class="tm-banner">
            <div class="tm-container-outer tm-banner-bg">
                <div class="container">
                    <div class="row tm-banner-row tm-banner-row-header">
                        <div class="col-xs-12">
                            <div class="tm-banner-header">
                                <h1 class="text-uppercase tm-banner-title">Let's begin</h1>
                                <img src="{{asset('template/img/dots-3.png')}}" alt="Dots">
                                <p class="tm-banner-subtitle">Anda Dapat Mengecek Jadwal Terlebih Dahulu.</p>
                                <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>       
                            </div>    
                        </div>                     
                    </div>
                    <div class="row tm-banner-row" id="tm-section-search">

                        <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                            <div class="form-row tm-search-form-row">                                
                                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                    <label for="inputCity">Apa yang ingin Anda Booking</label>
                                    <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Tulis acara yang ingin ada booking...">
                                </div>
                                <div class="form-group tm-form-group tm-form-group-1">                                    
                                    <label for="inputCity">Tempat Acara</label>
                                    <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Tulis alamat tempat acara...">
                                </div>
                            </div>
                            <div class="form-row tm-search-form-row">

                                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                    <label for="inputCheckIn">Tanggal Acara Dimulai</label>
                                    <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Dimulai">
                                </div>
                                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                    <label for="inputCheckOut">Tanggal Acara Selesai</label>
                                    <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Selesai">
                                </div>
                                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                    <label for="btnSubmit">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary tm-btn tm-btn-search text-uppercase" id="btnSubmit">Check Availability</button>
                                </div>
                            </div>                              
                        </form>                             

                    </div>
                    <div class="tm-banner-overlay"></div>
                </div>
                <span id="about"></span>                
            </div>               
        </section>
        
        {{-- ABout --}}
        <section class="p-5 tm-container-outer tm-bg-gray">            
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                        <h2 class="text-uppercase mb-4"><strong>About Us</strong></h2>
                        <p class="mb-4">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa, in tincidunt mi metus quis lectus. 
                            Duis nec lobortis velit. Vivamus id magna vulputate, tempor ante eget, tempus augue. Maecenas ultricies neque magna.</p>                     
                    </div>
                </div>
                <span id="services"></span>
            </div>            
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
                            {{-- @include('layouts.booking') --}}
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
                            <a href="/login" class="tm-recommended-price-box">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
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
                            <a href="/login" class="tm-recommended-price-box">
                                <p class="tm-recommended-price-link">Atur Jadwal</p>
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
                            Location
                        </a>
                        <a href="" class="px-2">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            Call +01 1234567890
                        </a>
                        <a href="" class="px-2">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            demo@gmail.com
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
            <p class="mb-0 p-2">Copyright © <span class="tm-current-year">2018</span> Your Company
        </footer>
    </div> <!-- .main-content -->

    
    <!-- load JS files -->
    <script src="{{asset('template/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>   
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/js/datepicker.min.js')}}"></script>
    {{-- <script src="{{asset('template/js/jquery.singlePageNav.min.js')}}"></script> --}}
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

            loadGoogleMap();                                       // Google Map                
            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
            });

    </script>             

</body>
</html>