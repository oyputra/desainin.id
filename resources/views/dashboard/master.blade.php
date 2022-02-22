<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
 <!DOCTYPE html>
 <html>
 
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>{{ config('app.name', 'Laravel') }} - Dashboard</title>
   <!-- Favicon -->
   <link rel="icon" href={{ asset("img/favicon.png")}} type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href={{ asset("argon/assets/vendor/nucleo/css/nucleo.css")}} type="text/css">
   <link rel="stylesheet" href={{ asset("argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css")}} type="text/css">
   <!-- Page plugins -->
   <!-- Argon CSS -->
   <link rel="stylesheet" href={{ asset("argon/assets/css/argon.css?v=1.1.0")}} type="text/css">
   <!-- Icon Title -->
   <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
   {{-- CSS --}}
   <style>
     .actived{
       background: darkorange;
     }
     .actived .nav-link-text {
      font-weight: bold;
     }
     .photo{
       width: 300px;
       height: 300px;
     }
     .photoprof{
       width: 50px;
       height: 50px;
     }
     div{
      -webkit-user-select: none; /* Safari */
      -ms-user-select: none; /* IE 10 and IE 11 */
      user-select: none; /* Standard syntax */
     }
     .pointer{
       cursor: pointer;
     }
     .no-drop{
       cursor: no-drop;
     }
   </style>
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
 </head>
 
 <body>
   <!-- Sidenav -->
   <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-dark bg-default" id="sidenav-main">
     <div class="scrollbar-inner">
       <!-- Brand -->
       <div class="sidenav-header d-flex align-items-center">
         <span class="navbar-brand">
           <img src={{ asset("argon/assets/img/brand/logo.png")}} class="navbar-brand-img" alt="...">
         </span>
         <div class="ml-auto">
           <!-- Sidenav toggler -->
           <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
             <div class="sidenav-toggler-inner">
               <i class="sidenav-toggler-line bg-white"></i>
               <i class="sidenav-toggler-line bg-white"></i>
               <i class="sidenav-toggler-line bg-white"></i>
             </div>
           </div>
         </div>
       </div>
       <div class="navbar-inner">
         <!-- Collapse -->
         <div class="collapse navbar-collapse" id="sidenav-collapse-main">
           <!-- Nav items -->
           <ul class="navbar-nav">
             <li class="nav-item">
               <a class="nav-link <?php if($page == "Dashboard") echo "actived";?>" href={{ url("dashboard")}} role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                 <i class="ni ni-chart-bar-32 text-white"></i>
                 <span class="nav-link-text">Dashboard</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link <?php if($page == "Details") echo "actived";?>" href={{ url("dashboard/details")}} role="button" aria-expanded="false" aria-controls="navbar-examples">
                 <i class="ni ni-single-02 text-white"></i>
                 <span class="nav-link-text">My Details</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link <?php if($page == "Messages") echo "actived";?>" href={{ url("dashboard/messages")}} role="button" aria-expanded="false" aria-controls="navbar-components">
                 <i class="ni ni-email-83 text-white"></i>
                 <span class="nav-link-text">My Messages</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link <?php if($page == "Invoices") echo "actived";?>" href={{ url("dashboard/invoices")}} role="button" aria-expanded="false" aria-controls="navbar-forms">
                 <i class="ni ni-credit-card text-white"></i>
                 <span class="nav-link-text">My Invoices</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link <?php if($page == "Favorites") echo "actived";?>" href={{ url("dashboard/favorites")}} role="button" aria-expanded="false" aria-controls="navbar-tables">
                 <i class="ni ni-favourite-28 text-white"></i>
                 <span class="nav-link-text">My Favorites</span>
               </a>
             </li>
           </ul>
           
         </div>
       </div>
     </div>
   </nav>

   <!-- Main content -->
   <div class="main-content" id="panel">
     <!-- Topnav -->
     <nav class="navbar navbar-top navbar-expand navbar-dark bg-orange border-bottom">
       <div class="container-fluid">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <!-- Search form -->
           <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
             <div class="form-group mb-0">
               <div class="input-group input-group-alternative input-group-merge">
                 <div class="input-group-prepend">
                   <span class="input-group-text"><i class="fas fa-search"></i></span>
                 </div>
                 <input class="form-control" placeholder="Search" type="text">
               </div>
             </div>
             <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
               <span aria-hidden="true">×</span>
             </button>
           </form>
           <!-- Navbar links -->
           <ul class="navbar-nav align-items-center ml-md-auto">
             <li class="nav-item d-xl-none">
               <!-- Sidenav toggler -->
               <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                 <div class="sidenav-toggler-inner">
                   <i class="sidenav-toggler-line"></i>
                   <i class="sidenav-toggler-line"></i>
                   <i class="sidenav-toggler-line"></i>
                 </div>
               </div>
             </li>
             <li class="nav-item d-sm-none">
               <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                 <i class="ni ni-zoom-split-in"></i>
               </a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="ni ni-bell-55"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                 <!-- Dropdown header -->
                 <div class="px-3 py-3">
                   <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                 </div>
                 <!-- List group -->
                 <div class="list-group list-group-flush">
                   <a href="#!" class="list-group-item list-group-item-action">
                     <div class="row align-items-center">
                       <div class="col-auto">
                         <!-- Avatar -->
                         <img alt="Image placeholder" src={{ asset("argon/assets/img/theme/team-1.jpg")}} class="avatar rounded-circle">
                       </div>
                       <div class="col ml--2">
                         <div class="d-flex justify-content-between align-items-center">
                           <div>
                             <h4 class="mb-0 text-sm">John Snow</h4>
                           </div>
                           <div class="text-right text-muted">
                             <small>2 hrs ago</small>
                           </div>
                         </div>
                         <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                       </div>
                     </div>
                   </a>
                   <a href="#!" class="list-group-item list-group-item-action">
                     <div class="row align-items-center">
                       <div class="col-auto">
                         <!-- Avatar -->
                         <img alt="Image placeholder" src={{ asset("argon/assets/img/theme/team-2.jpg")}} class="avatar rounded-circle">
                       </div>
                       <div class="col ml--2">
                         <div class="d-flex justify-content-between align-items-center">
                           <div>
                             <h4 class="mb-0 text-sm">John Snow</h4>
                           </div>
                           <div class="text-right text-muted">
                             <small>3 hrs ago</small>
                           </div>
                         </div>
                         <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                       </div>
                     </div>
                   </a>
                   <a href="#!" class="list-group-item list-group-item-action">
                     <div class="row align-items-center">
                       <div class="col-auto">
                         <!-- Avatar -->
                         <img alt="Image placeholder" src={{ asset("argon/assets/img/theme/team-3.jpg")}} class="avatar rounded-circle">
                       </div>
                       <div class="col ml--2">
                         <div class="d-flex justify-content-between align-items-center">
                           <div>
                             <h4 class="mb-0 text-sm">John Snow</h4>
                           </div>
                           <div class="text-right text-muted">
                             <small>5 hrs ago</small>
                           </div>
                         </div>
                         <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                       </div>
                     </div>
                   </a>
                   <a href="#!" class="list-group-item list-group-item-action">
                     <div class="row align-items-center">
                       <div class="col-auto">
                         <!-- Avatar -->
                         <img alt="Image placeholder" src={{ asset("argon/assets/img/theme/team-4.jpg")}} class="avatar rounded-circle">
                       </div>
                       <div class="col ml--2">
                         <div class="d-flex justify-content-between align-items-center">
                           <div>
                             <h4 class="mb-0 text-sm">John Snow</h4>
                           </div>
                           <div class="text-right text-muted">
                             <small>2 hrs ago</small>
                           </div>
                         </div>
                         <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                       </div>
                     </div>
                   </a>
                   <a href="#!" class="list-group-item list-group-item-action">
                     <div class="row align-items-center">
                       <div class="col-auto">
                         <!-- Avatar -->
                         <img alt="Image placeholder" src={{ asset("argon/assets/img/theme/team-5.jpg")}} class="avatar rounded-circle">
                       </div>
                       <div class="col ml--2">
                         <div class="d-flex justify-content-between align-items-center">
                           <div>
                             <h4 class="mb-0 text-sm">John Snow</h4>
                           </div>
                           <div class="text-right text-muted">
                             <small>3 hrs ago</small>
                           </div>
                         </div>
                         <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                       </div>
                     </div>
                   </a>
                 </div>
                 <!-- View all -->
                 <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
               </div>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="ni ni-ungroup"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                 <div class="row shortcuts px-4">
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                       <i class="ni ni-calendar-grid-58"></i>
                     </span>
                     <small>Calendar</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                       <i class="ni ni-email-83"></i>
                     </span>
                     <small>Email</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                       <i class="ni ni-credit-card"></i>
                     </span>
                     <small>Payments</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                       <i class="ni ni-books"></i>
                     </span>
                     <small>Reports</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                       <i class="ni ni-pin-3"></i>
                     </span>
                     <small>Maps</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                       <i class="ni ni-basket"></i>
                     </span>
                     <small>Shop</small>
                   </a>
                 </div>
               </div>
             </li>
           </ul>
           <ul class="navbar-nav align-items-center ml-auto ml-md-0">
             <li class="nav-item dropdown">
               <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <div class="media align-items-center">
                     @if ($user->foto == null)
                      <img class="avatar rounded-circle photoprof" alt="Image placeholder" src={{ asset("img/favicon.png")}}>         
                     @else
                      <img class="avatar rounded-circle photoprof" alt="Image placeholder" src={{ asset("upload/img/" . $user->foto )}}>                         
                     @endif
                   {{-- <div class="media-body ml-2 d-none d-lg-block">
                     <span class="mb-0 text-sm  font-weight-bold">
                      @if ($user->username == null)
                        {{ auth::user()->nama_depan }}
                      @else
                        {{ auth::user()->username }}
                      @endif 
                     </span>
                   </div> --}}
                 </div>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                 <div class="dropdown-header noti-title">
                   <h6 class="text-overflow m-0">Welcome!</h6>
                 </div>
                 <a href="#!" class="dropdown-item">
                   <i class="ni ni-single-02"></i>
                   <span>My profile</span>
                 </a>
                 <a href="#!" class="dropdown-item">
                   <i class="ni ni-settings-gear-65"></i>
                   <span>Settings</span>
                 </a>
                 <a href="#!" class="dropdown-item">
                   <i class="ni ni-calendar-grid-58"></i>
                   <span>Activity</span>
                 </a>
                 <a href="#!" class="dropdown-item">
                   <i class="ni ni-support-16"></i>
                   <span>Support</span>
                 </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <i class="ni ni-user-run"></i>
                    {{ __('Logout') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                 </a>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </nav>

     
     @yield('content')

  
     <!-- Footer -->
     <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-dark">
              &copy; {{ date('Y')}} <span class="font-weight-bold text-dark ml-1" target="_blank">Web Developer Specialist Intern <span class="text-orange">desainin.id</span></span>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a class="copyright text-dark mr-4" href="https://www.facebook.com/desainin.id" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Facebook">
                  <i class="fab fa-facebook-square"></i>
                  <span class="nav-link-inner--text d-lg-none">Facebook</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="copyright text-dark mr-4" href="https://www.instagram.com/desainin.indonesia" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
                  <i class="fab fa-instagram"></i>
                  <span class="nav-link-inner--text d-lg-none">Instagram</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="copyright text-dark" href="https://twitter.com/desainin_id" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
                  <i class="fab fa-twitter-square"></i>
                  <span class="nav-link-inner--text d-lg-none">Twitter</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src={{ asset("argon/assets/vendor/jquery/dist/jquery.min.js")}}></script>
  <script src={{ asset("argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}></script>
  <script src={{ asset("argon/assets/vendor/js-cookie/js.cookie.js")}}></script>
  <script src={{ asset("argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js")}}></script>
  <script src={{ asset("argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js")}}></script>
  <!-- Optional JS -->
  <script src={{ asset("argon/assets/vendor/chart.js/dist/Chart.min.js")}}></script>
  <script src={{ asset("argon/assets/vendor/chart.js/dist/Chart.extension.js")}}></script>
  <script src={{ asset("argon/assets/vendor/list.js/dist/list.min.js")}}></script>
  <!-- Argon JS -->
  <script src={{ asset("argon/assets/js/argon.js?v=1.1.0")}}></script>
  <!-- Demo JS - remove this in your project -->
  <script src={{ asset("argon/assets/js/demo.min.js")}}></script>
  {{-- Password Visibility --}}
  <script type="text/javascript">
    function showPass() {
      var icon = document.getElementById('icon');
        var x = document.getElementById('myInput');
        if (x.type === 'password') {
            icon.className = 'fas fa-eye';
            x.type = 'text';
            txt.innerHTML = 'Hide';
        } else {
            icon.className = 'fas fa-eye-slash';
            x.type = 'password';
            txt.innerHTML = 'Show';
        }
    }
    function showPass2() {
      var icon = document.getElementById('icon2');
        var x = document.getElementById('myInput2');
        if (x.type === 'password') {
            icon.className = 'fas fa-eye';
            x.type = 'text';
            txt.innerHTML = 'Hide';
        } else {
            icon.className = 'fas fa-eye-slash';
            x.type = 'password';
            txt.innerHTML = 'Show';
        }
    }
    function showPass3() {
      var icon = document.getElementById('icon3');
        var x = document.getElementById('myInput3');
        if (x.type === 'password') {
            icon.className = 'fas fa-eye';
            x.type = 'text';
            txt.innerHTML = 'Hide';
        } else {
            icon.className = 'fas fa-eye-slash';
            x.type = 'password';
            txt.innerHTML = 'Show';
        }
    }
  </script>
</body>

</html>