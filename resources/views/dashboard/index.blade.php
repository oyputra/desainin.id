<?php $page = 'Dashboard' ?>

@extends('dashboard.master')
@section('content')

    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 bg-orange">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Page content -->
    <div class="container-fluid mt--6">

      <div class="row">
        <div class="col-xl">
          <!-- Table -->
          <div class="row">
            <div class="col">
              <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col mb-0">
                      <h3>Users Table</h3>
                    </div>
                    <div class="col text-right mb-0">
                      <a class="btn btn-sm btn-primary no-drop" href="#" disabled><i class="fas fa-plus fa-md"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]'>
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="sort" data-sort="name">Photo</th>
                        <th scope="col" class="sort" data-sort="name">Username</th>
                        <th scope="col" class="sort" data-sort="budget">Nama</th>
                        <th scope="col" class="sort" data-sort="status">Email</th>
                        <th scope="col" class="sort" data-sort="status">Created</th>
                        <th scope="col" class="sort" data-sort="completion">Updated</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="list">

                      @foreach ( $users as $usr )
                      <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td scope="row">
                          <div class="media align-items-center">
                              @if ($usr->foto == null)
                                N/A
                              @else
                                <img class="photoprof avatar rounded-circle mr-3" alt="Image placeholder" src={{ asset("upload/img/" . $usr->foto )}}>                      
                              @endif
                          </div>
                        </td>
                        <td scope="row">
                          <div class="media align-items-center">
                            <div class="media-body">
                              <span class="name mb-0 text-sm">
                                @if ($usr->username == null)
                                N/A
                                @else
                                {{ $usr->username }}
                                @endif
                              </span>
                            </div>
                          </div>
                        </td>
                        <td class="budget">{{ $usr->nama_depan }} {{ $usr->nama_belakang }}</td>
                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="bg-warning"></i>
                            <span class="status">{{ $usr['email'] }}</span>
                          </span>
                        </td>
                        <td>{{ date('d-m-Y', strtotime($usr['created_at']) )}}</td>
                        <td>{{ date('d-m-Y', strtotime($usr['updated_at'])) }}</td>
                        <td class="text-right">
                          <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
                <!-- Card footer -->
                {{-- <div class="card-footer py-4">
                  <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                          <i class="fas fa-angle-left"></i>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          <i class="fas fa-angle-right"></i>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl">          
          <!-- Card stats -->
          <div class="row text-center">
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="col-auto">
                    <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                      <i class="ni ni-email-83"></i>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mt-3">
                      <h1 class="card-title text-uppercase mb-0 display-4">My Messages</h1>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Here you can send and receive <br> messages and updates. </span>
                  </p>
                  <a href={{ url("dashboard/messages")}} class="btn btn-sm btn-block btn-lg bg-orange text-white mt-3">Continue</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="col-auto">
                    <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                      <i class="ni ni-credit-card"></i>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mt-3">
                      <h1 class="card-title text-uppercase mb-0 display-4">My Orders</h1>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Here you can view and <br> manage your account orders.</span>
                  </p>
                  <a href={{ url("dashboard/invoices")}} class="btn btn-sm btn-block btn-lg bg-orange text-white mt-3">Continue</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="col-auto">
                    <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                      <i class="ni ni-favourite-28"></i>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mt-3">
                      <h1 class="card-title text-uppercase mb-0 display-4">My Favorites</h1>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Here you can view all of your <br> saved favorites</span>
                  </p>
                  <a href={{ url("dashboard/favorites")}} class="btn btn-sm btn-block btn-lg bg-orange text-white mt-3" disabled>Continue</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-3">
                      <h4 class="card-title mb-0">Update My Details</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9">
                      <p class="mt-3 mb-0 text-sm">
                        <span>Here you can update your account details.</span>
                      </p>
                    </div>
                    <div class="col-md-3">
                      <a href={{ url("dashboard/details") }} class="btn btn-sm btn-block bg-orange text-white mt-3">
                        <i class="fas fa-arrow-right fa-2x"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-3">
                      <h4 class="card-title mb-0">Change My Photo</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9">
                      <p class="mt-3 mb-0 text-sm">
                        <span>Here you can change your account display photo.</span>
                      </p>
                    </div>
                    <div class="col-md-3">
                      <a href={{ url("dashboard/details")}} class="btn btn-sm btn-block bg-orange text-white mt-3">
                        <i class="fas fa-arrow-right fa-2x"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-3">
                      <h4 class="card-title mb-0">Change Password</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9">
                      <p class="mt-3 mb-0 text-sm">
                        <span>Here you can change your account password.</span>
                      </p>
                    </div>
                    <div class="col-md-3">
                      <a href={{ url("dashboard/details")}} class="btn btn-sm btn-block bg-orange text-white mt-3">
                        <i class="fas fa-arrow-right fa-2x"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
@endsection
