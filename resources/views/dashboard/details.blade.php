<?php $page = 'Details' ?>

@extends('dashboard.master')
@section('content')

<!-- Header -->
<div class="header pb-6 bg-orange">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">My Details</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="header-body">
      <div class="row">
        <div class="col-lg col">
          @if (session('status'))
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <span class="alert-text"><strong>Success!</strong> {{session('status')}}</span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            @endif
            @if (session('error'))
              <div class="alert alert-default alert-dismissible fade show" role="alert">
                  <span class="alert-text"><strong>Error!</strong> {{session('error')}}</span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            @endif
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center pb-4">
        <div class="col-lg col">
          <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-single-02 mr-2"></i>Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-check-bold mr-2"></i>Username</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-image mr-2"></i>Photo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-square-pin mr-2"></i>Address</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-money-coins mr-2"></i>Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-6-tab" data-toggle="tab" href="#tabs-icons-text-6" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-lock-circle-open mr-2"></i>Password</a>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Page content -->
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-xl">

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
        
          {{-- My Details --}}
          <div class="card">
            {{-- Card Header --}}
            <div class="card-header">
                <div class="container">
                  <div class="row align-items-center">
                    <h3 class="mb-0 mr-auto">My Details</h3>
                  </div>
                </div>
            </div>
            {{-- Card Body --}}
            <div class="card-body">
              <form method="POST" action={{ route('detail.update') }} class="needs-validation" novalidate>
                @csrf

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                    <label class="form-control-label text-muted" for="validationCustom01">First name</label>
                    <input name="nama_depan" type="text" class="form-control font-weight-bold text-dark @error('nama_depan') is-invalid @enderror" autocomplete="off" id="validationCustom01" value={{ $user['nama_depan'] }} autofocus>
                    @error('nama_depan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-control-label text-muted" for="validationCustom02">Last name</label>
                    <input name="nama_belakang" type="text" class="form-control font-weight-bold text-dark @error('nama_belakang') is-invalid @enderror" autocomplete="off" id="validationCustom02" value={{ $user['nama_belakang'] }}>
                    @error('nama_belakang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-control-label text-muted" for="validationEmail">Email</label>
                    <input name="email" type="text" class="form-control font-weight-bold text-dark @error('email') is-invalid @enderror" autocomplete="off" id="validationCustomEmail" value={{ $user['email'] }} aria-describedby="inputGroupPrepend">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="validationPhoneNumber">Phone Number</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                          @if ($user->no_telp == null)
                              <input name="no_telp" type="text" class="form-control" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend">
                          @else
                              <input name="no_telp" type="text" class="form-control font-weight-bold text-dark" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend" value="{{ $user->no_telp }}">
                          @endif
                        </div>
                      <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                          <label class="form-control-label text-muted" for="validationLocation">Location</label>
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                            </div>
                            @if ($user->lokasi == null)
                                <input name="lokasi" type="text" class="form-control" id="validationCustomPhoneNumber" autocomplete="off" aria-describedby="inputGroupPrepend">
                            @else
                                <input name="lokasi" type="text" class="form-control font-weight-bold text-dark" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend" value="{{ $user->lokasi }}">
                            @endif
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                          <label class="form-control-label text-muted" for="validationWebsite">Website</label>
                          <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                          </div>
                          @if ($user->website == null)
                              <input name="website" type="text" class="form-control" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend">
                          @else
                              <input name="website" type="text" class="form-control font-weight-bold text-dark" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend" value="{{ $user->website }}">
                          @endif
                          </div>
                          <small>
                            @if ($user->website == null)
                              <a class="text-muted ml-3" href="#">Lihat web</a>                              
                            @else
                              <a class="text-muted ml-3" href={{"https://" . $user->website }} target="_blank">Lihat web</a>
                            @endif
                          </small>
                      </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md mb-3">
                    <label class="form-control-label text-muted" for="exampleFormControlTextarea">My Description</label>
                    @if ($user->deskripsi == null)
                      <textarea type="text" name="deskripsi" class="form-control" autocomplete="off" id="exampleFormControlTextarea" resize="none"></textarea>
                    @else
                      <textarea type="text" name="deskripsi" class="form-control font-weight-bold text-dark" autocomplete="off" id="exampleFormControlTextarea" resize="none" rows="3">{{ $user->deskripsi }}</textarea>
                    @endif
                    </div>
                </div>
                <h4 class="pt-2 text-muted" for="exampleFormControlSosialMedia">Social Media</h4>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                          <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                          </div>
                          @if ($user->instagram == null)
                              <input name="instagram" type="text" class="form-control" placeholder="Username Instagram" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend">
                          @else
                              <input name="instagram" type="text" class="form-control font-weight-bold text-dark" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend" value="{{ $user->instagram }}">
                          @endif
                          </div>
                          <small>
                            @if ($user->instagram == null)
                              <a class="text-muted ml-3" href="#">Lihat profil</a>                                                                
                            @else
                              <a class="text-muted ml-3" href={{"https://www.instagram.com/" . $user->instagram }} target="_blank">Lihat profil</a>                                
                            @endif
                          </small>
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                          </div>
                          @if ($user->facebook == null)
                              <input name="facebook" type="text" class="form-control" placeholder="Username Facebook" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend">
                          @else
                              <input name="facebook" type="text" class="form-control font-weight-bold text-dark" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend" value="{{ $user->facebook }}">
                          @endif
                        </div>
                        <small>
                          @if ($user->facebook == null)
                            <a class="text-muted ml-3" href="#">Lihat profil</a>                                                            
                          @else
                            <a class="text-muted ml-3" href={{"https://www.facebook.com/" . $user->facebook }} target="_blank">Lihat profil</a>                              
                          @endif
                        </small>
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                          <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                          </div>
                          @if ($user->twitter == null)
                              <input name="twitter" type="text" class="form-control" placeholder="Username Twitter" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend">
                          @else
                              <input name="twitter" type="text" class="form-control font-weight-bold text-dark" autocomplete="off" id="validationCustomPhoneNumber" aria-describedby="inputGroupPrepend" value="{{ $user->twitter }}">
                          @endif
                          </div>
                          <small>
                            @if ($user->twitter == null)
                              <a class="text-muted ml-3" href="#">Lihat profil</a>                                                                
                            @else
                              <a class="text-muted ml-3" href={{"https://www.twitter.com/" . $user->twitter }} target="_blank">Lihat profil</a>                                
                            @endif
                          </small>
                      </div>
                    </div>
                </div>
                <button class="btn btn-primary text-white" type="submit">Update</button>
              </form>
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
          
          {{-- My Username --}}
          <div class="card">
            {{-- Card Header --}}
            <div class="card-header">
              <h3 class="mb-0">My Username</h3>
            </div>
            {{-- Card Body --}}
            <div class="card-body">
              <form action="{{ route('username.update') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label class="form-control-label" for="validationCustom01">Current Username</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationCustom01" value="{{ $user->username }}" aria-describedby="inputGroupPrepend" disabled>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label class="form-control-label" for="validationCustom02">New Username</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">@</span>
                        </div>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="validationCustom02" autocomplete="off" aria-describedby="inputGroupPrepend" autofocus required>
                        @error('username')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
              </form>
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
          
          {{-- My Photo --}}
          <div class="card">
            {{-- Card Header --}}
            <div class="card-header">
              <h3 class="mb-0">My Photo</h3>
            </div>
            {{-- Card Body --}}
            <div class="card-body">
              <div class="form-row">
                <div class="col-md-6 mb-3 text-center">
                  @if ($user->foto == null)
                    <img class="rounded-circle photo" alt="Image placeholder" src={{ asset("img/favicon.png")}}>                                        
                  @else
                    <img class="rounded-circle photo" alt="Image placeholder" src={{ asset("upload/img/" . $user->foto )}}>                      
                  @endif
                </div>
                <div class="col-md-6 mb-3">
                  <form action={{ route("image.update") }} method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="custom-file mb-3">
                      <input name="foto" type="file" class="custom-file-input" id="customFileLang" lang="en">
                      <label class="custom-file-label" for="customFileLang">Select file</label>
                    </div> --}}
                    <label for="exampleInputtext1">File <span class="text-warning text-sm">(maximum size : 6 mb)</span></label> 
                    <div class="card text-center" style="box-shadow: 0 0 0;border: thin;border-style: dashed;"> 
                      <div class="card-body"> 
                        <input name="foto" type="file" class="" id="customFileLang" lang="en">
                      </div> 
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                    {{-- MERN, MEAN, MEVN --}}
                    {{-- M = monggoDB E = Express R = React.js N = Node.js
                         M = monggoDB E = Express A = Angular N = Node.js
                         M = monggoDB E = Express V = Vue.js N = Node.js --}}
                  </form>
                </div>
              </div>
            </div>
          </div>  

        </div>
        <div class="tab-pane fade show" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
          
          {{-- My Address --}}
          <div class="card">
            {{-- Card Header --}}
            <div class="card-header">
              <h3 class="mb-0">My Address</h3>
            </div>
            {{-- Card Body --}}
            <div class="card-body">
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label class="form-control-label" for="validationCustom01">Address Line 1</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Your Address 1" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-control-label" for="validationCustom02">Address Line 2</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Your Address 2" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-control-label" for="validationCustom01">Country</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Your Country" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-control-label" for="validationCustom02">City/State</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="Your City/State" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md mb-3">
                    <label class="form-control-label" for="validationCustom02">Postal/Zipcode</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="Your Postal/Zipcode" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
              </form>
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
          
          {{-- My Payment --}}
          <div class="card">
            {{-- Card Header --}}
            <div class="card-header">
              <h3 class="mb-0">My Payment</h3>
            </div>
            {{-- Card Body --}}
            <div class="card-body">
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label class="form-control-label" for="validationCustom01">My Payment Preference</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Paypal" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-control-label" for="validationCustom02">Paypal Email</label>
                    <input type="text" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
              </form>
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="tabs-icons-text-6" role="tabpanel" aria-labelledby="tabs-icons-text-6-tab">
            
            {{-- My Password --}}
            <div class="card">
              {{-- Card Header --}}
              <div class="card-header">
                <h3 class="mb-0">My Password</h3>
              </div>
              {{-- Card Body --}}
              <div class="card-body">
                <form action={{ route('changepassword') }} method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                  @csrf
                  <div class="form-row">
                    <div class="col-md mb-3">
                      <label class="form-control-label" for="old_password">Current Password</label>
                      <div class="input-group input-group-merge input-group-alternative">
                        <input id="myInput" type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" name="old_password">
                        <div class="input-group-prepend">
                          <span class="input-group-text pointer" onclick="showPass()">
                            <i class="fas fa-eye-slash" id="icon"></i></span>
                        </div>
                        @error('old_password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md mb-3">
                      <label class="form-control-label" for="password">New Password</label>
                      <div class="input-group input-group-merge input-group-alternative">
                        <input id="myInput2" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        <div class="input-group-prepend">
                          <span class="input-group-text pointer" onclick="showPass2()">
                            <i class="fas fa-eye-slash" id="icon2"></i>
                          </span>
                        </div>
                        @error('password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md mb-3">
                      <label class="form-control-label" for="password_confirmation">Confirm Password</label>
                      <div class="input-group input-group-merge input-group-alternative">
                        <input id="myInput3" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                        <div class="input-group-prepend">
                            <span class="input-group-text pointer" onclick="showPass3()">
                              <i class="fas fa-eye-slash" id="icon3"></i>
                            </span>
                        </div>
                        @error('password_confirmation')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Update</button>
                  {{-- <input type="hidden" name="user_id" value={{auth::user()->id}}> --}}
                  <input type="hidden" name="_token" value="{{ Session::token() }}"}>
                </form>
              </div>
            </div>

        </div>
      </div>

    </div>
  </div>

    
@endsection
