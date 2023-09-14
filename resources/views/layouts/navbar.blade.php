@vite(['resources/js/app.js'])
<div class="tm-main-content" id="top">
    <div class="tm-top-bar-bg"></div>    
    <div class="tm-top-bar" id="tm-top-bar">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg narbar-light">
                    @guest
                        <a class="navbar-brand mr-auto nav-link" href="/">
                            {{-- <img src="{{asset('template/img/logo.png')}}" alt="Site logo"> --}}
                            4Booking
                        </a>
                    @else
                        <a class="navbar-brand mr-auto nav-link" href="/home">
                            {{-- <img src="{{asset('template/img/logo.png')}}" alt="Site logo"> --}}
                            4Booking
                        </a>
                    @endguest
                    <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
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
                                            <a class="dropdown-item" href="">
                                                {{ __('Profile') }}
                                            </a>
                                            <a class="dropdown-item" href="">
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
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- .tm-top-bar -->
</div>