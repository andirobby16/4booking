{{-- CSS untuk Form Login dan Register --}}
<link rel="stylesheet" href="registerform/css/register.css">
<link rel="stylesheet" href="registerform/fonts/material-icon/css/material-design-iconic-font.min.css">

@extends('layouts.app')

@section('content')
<div class="tm-page-wrap mx-auto">
    <section class="tm-banner">
        <div class="tm-container-outer tm-banner-bg">
            <div class="container">
                <div class="row tm-banner-row tm-banner-row-header">
                    <div class="col-xs-12">
                        <div class="tm-banner-header py-3">
                            <h1 class="text-uppercase tm-banner-title">Silahkan Login</h1>
                            <p style="color: rgb(210, 210, 210)">Untuk melakukan booking atau pesanan</p>
                        </div>    
                    </div>                    
                </div>
                
                <div class="row tm-banner-row" id="tm-section-search">
                    <section class="sign-in">
                        <div class="container-form mx-auto">
                            <div class="signin-form">
                                <h2 class="form-title">Login</h2>
                                <p class="">Jika belum mempunyai akun, silahkan <a href="/register">register</a></p>
                                <form method="POST" action="{{ route('login') }}" class="login-form" id="login-form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                        <div class="col">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                        <div class="col">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-button">
                                        <input type="submit" name="login" id="login" class="form-submit" value="Login"/>
                                    </div>
                                    @if(Route::has('password.request'))
                                        <p style="margin-top: -10px">
                                            <a href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </p>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                
                <div class="tm-banner-overlay"></div>
            </div>                  
        </div>                
    </section>
</div>
@endsection
