@extends('auth.master')
@section('content')

<nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-gradient-success">
  <div class="container">
    <a class="text-dark nav-link nav-link-icon btn" href={{ url("/")}}><i class="fas fa-long-arrow-alt-left mr-2"></i>Kembali</a>
  </div>
</nav> 
<body class="bg-default">
  
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-success py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8 px-5">
              <h1 class="display-2 text-default">Welcome!</h1>
              <h3 class="text-lead text-default">Bagi kamu yang belum terdaftar, silakan daftar</h3>
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
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small>Daftar melalui</small></div>
              <div class="text-center">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
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
                <small>Atau daftar melalui kredensial</small>
              </div>

              <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-check-bold"></i></span>
                    </div>
                    <input id="nama_depan" class="form-control @error('first_name') is-invalid @enderror" name="nama_depan" value="{{ old('nama_depan') }}" autocomplete="off" placeholder="Nama Depan" type="text" autofocus>
                    <input id="nama_belakang" class="form-control @error('last_name') is-invalid @enderror" name="nama_belakang" value="{{ old('nama_belakang') }}" autocomplete="off" placeholder="Nama Belakang" type="text">  
                    
                    @error('nama_depan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('nama_belakang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" placeholder="Email" type="email">

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
                    <input id="myInput" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" autocomplete="off" placeholder="Kata Sandi" type="password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="input-group-prepend">
                      <span class="input-group-text pointer" onclick="showPass()">
                        <i class="fas fa-eye-slash" id="icon"></i></span>
                      </div>
                  </div>
                  {{-- <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> --}}
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input id="myInput2" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="off" placeholder="Konfirmasi Kata Sandi" type="password">
                    <div class="input-group-prepend">
                      <span class="input-group-text pointer" onclick="showPass2()">
                        <i class="fas fa-eye-slash" id="icon2"></i></span>
                    </div>
                  </div>
                </div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input name="privacy_policy" class="custom-control-input @error('checkbox') is-invalid @enderror" id="privacy_policy" type="checkbox" required>
                      <label class="custom-control-label" for="privacy_policy">
                        <span class="text-muted">Saya setuju dengan <a href="#!">Kebijakan Privasi</a></span>
                      </label>
                      @error('checkbox')
                        <div class="invalid-feedback">
                          <strong>{{ $message }}</strong>
                        </div>    
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-default btn-block mt-4">Daftar</button>
                  <a href={{ route('login') }} class="btn btn-block btn-outline-success">Login</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection