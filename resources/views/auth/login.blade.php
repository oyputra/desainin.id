@extends('auth.master')
@section('content')

<!-- Navabr -->
<nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-gradient-orange">
  <div class="container">
    <a class="text-dark nav-link nav-link-icon btn" href={{ url("/")}}><i class="fas fa-long-arrow-alt-left mr-2"></i>Kembali</a>
  </div>
</nav> 
<body class="bg-default">

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-orange py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="display-2 text-default">Welcome!</h1>
              <h3 class="text-lead text-default">Bagi kamu yang sudah terdaftar, silakan login</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Login melalui</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src={{ asset("argon/assets/img/icons/common/facebook.svg")}}></span>
                  <span class="btn-inner--text">Facebook</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src={{ asset("argon/assets/img/icons/common/google.svg")}}></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Atau login melalui kredensial</small>
              </div>
              <form method="POST" action={{ route('login') }}>
                @csrf

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" type="email" value="{{ old('email') }}" autocomplete="off" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input id="myInput" class="form-control @error('password') is-invalid @enderror" placeholder="Kata Sandi" type="password" name="password" required autocomplete="off">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="input-group-prepend">
                        <span class="input-group-text pointer" onclick="showPass()">
                          <i class="fas fa-eye-slash" id="icon"></i>
                        </span>
                    </div>
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  
                    <input name="remember" class="custom-control-input" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">
                      <span class="text-muted">
                        {{ __('Ingat login saya') }}
                      </span>
                    </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-block btn-default mt-4">Login</button>
                  <a href={{ route('register') }} class="btn btn-block btn-outline-success">Daftar</a>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href={{ route('password.request') }} class="text-light"><small>Lupa kata sandi?</small></a>
            </div>
            <div class="col-6 text-right">
              {{-- <a href="#" class="text-light"><small>Create new account</small></a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection