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
   <title>{{ config('app.name', 'Laravel') }}</title>
   <!-- Favicon -->
   <link rel="icon" href={{ asset("img/favicon.png")}} type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href={{ asset("argon/assets/vendor/nucleo/css/nucleo.css")}} type="text/css">
   <link rel="stylesheet" href={{ asset("argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css")}} type="text/css">
   <!-- Argon CSS -->
   <link rel="stylesheet" href={{ asset("argon/assets/css/argon.css?v=1.1.0")}} type="text/css">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   {{-- CSS Advanced --}}
   <style>
     .pointer{
       cursor: pointer;
     }
     div{
      -webkit-user-select: none; /* Safari */
      -ms-user-select: none; /* IE 10 and IE 11 */
      user-select: none; /* Standard syntax */
     }
   </style>
 </head>

 {{-- Main Content --}}
 @yield('content')

 <!-- Footer -->
 <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; {{ date('Y')}} <span class="font-weight-bold text-white ml-1" target="_blank">Web Developer Specialist Intern <span class="text-orange">desainin.id</span></span>
          </div>
          {{-- 
            date_default_timezone_set('Asia/Jakarta');
            $currentDateTime = date('Y-m-d H:i:s');
            $currentDate = date('m/d/Y');
            --}}
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src={{ asset("argon/assets/vendor/jquery/dist/jquery.min.js")}}></script>
  <script src={{ asset("argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}></script>
  <script src={{ asset("argon/assets/vendor/js-cookie/js.cookie.js")}}></script>
  <script src={{ asset("argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js")}}></script>
  <script src={{ asset("argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js")}}></script>
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
  </script>
</body>

</html>