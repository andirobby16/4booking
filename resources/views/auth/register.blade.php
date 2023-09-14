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
                            <h1 class="text-uppercase tm-banner-title">Silahkan Register</h1>
                            <p style="color: rgb(210, 210, 210)">Jika anda belum mempunyai akun</p>
                        </div>    
                    </div>                   
                </div>
                
                <div class="row tm-banner-row" id="tm-section-search">
                    <section class="signup">
                        <div class="container-form mx-auto" id="container-form-register">
                            <div class="signup-form">
                                <h2 class="form-title">Register</h2>
                                <p class="">Jika sudah mempunyai akun, silahkan <a href="/login">login</a></p>
                                <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <div class="col">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">
                                
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                        <div class="col">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                                
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
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="password-confirm"><i class="zmdi zmdi-lock-outline"></i></label>
                                        <div class="col">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password">
                                        </div>
                                    </div>
                    
                                    <div class="form-group form-button">
                                        <input type="submit" name="register" id="register" class="form-submit" value="Register"/>
                                    </div>
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