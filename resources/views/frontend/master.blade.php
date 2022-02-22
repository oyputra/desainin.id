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
    <title>{{ config('app.name', 'Laravel') }} - Home</title>
    <!-- Favicon -->
    <link rel="icon" href={{ asset("img/favicon.png")}} type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href={{ asset("argon/assets/vendor/nucleo/css/nucleo.css")}} type="text/css">
    <link rel="stylesheet" href={{ asset("argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css")}} type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href={{ asset("argon/assets/css/argon.css?v=1.1.0")}} type="text/css">
    {{-- Popup chat window --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <style>
      /* CSS Popup chat window */
      .open-top-left{
        position: fixed; 
        margin-left: 30px; 
        margin-top: 30px;
        top: 0;
        left: 0; 
      }

      .open-top-right{
        position: fixed; 
        margin-right: 30px; 
        margin-top: 30px;
        top: 0;
        right: 0; 
      }

      .open-bottom-left{
        position: fixed; 
        margin-left: 30px; 
        margin-bottom: 30px;
        left: 0; 
        bottom: 0;
      }

      .open-bottom-right{
        position: fixed; 
        margin-right: 30px; 
        margin-bottom: 30px;
        right: 0; 
        bottom: 0; 
      }

      .form-top-left{
        position: fixed; 
        width: 18rem; 
        margin-left: 30px; 
        margin-top: 30px; 
        top: 0; 
        left: 0; 
      }

      .form-top-right{
        position: fixed; 
        width: 18rem; 
        margin-right: 30px; 
        margin-top: 30px; 
        top: 0; 
        right: 0; 
      }

      .form-bottom-left{
        position: fixed; 
        width: 18rem; 
        margin-left: 30px; 
        margin-bottom: 30px; 
        bottom: 0; 
        left: 0; 
      }

      .form-bottom-right{
        position: fixed; 
        width: 18rem; 
        margin-right: 30px; 
        margin-bottom: 30px; 
        bottom: 0; 
        right: 0; 
      }

      .pointer{
        cursor: pointer;
      }
      div{
        -webkit-user-select: none; /* Safari */
        -ms-user-select: none; /* IE 10 and IE 11 */
        user-select: none; /* Standard syntax */
      }
      .z-index{
        z-index: 3000;
      }
    </style>
  </head>
  
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-default">
    <div class="container">
      <a class="navbar-brand" href={{ url("/")}}>
        <img src={{ asset("img/logo.png")}}>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <img src={{ asset("img/logo.png")}}>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/desainin.id" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Facebook">
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/desainin.indonesia" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/desainin_id" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
              <i class="fab fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
  
  <body>

  {{-- ISI KONTEN --}}
  @yield('content')
  
  {{-- CS Popout WhatsApp --}}
  <!-- 
		class name position button open :
		.open-top-left
		.open-top-right
		.open-bottom-left
		.open-bottom-right
	-->
	<div id="open" class="shadow-sm rounded-circle open-bottom-right pointer z-index"><img src={{ asset("img/whatsapp.png")}} width="70"></div>

	<!-- 
		class name position form message :
		.form-top-left
		.form-top-right
		.form-bottom-left
		.form-bottom-right
	-->

	<div id="form" class="card shadow-sm border-0 form-bottom-right d-none z-index">
		<div class="card-header bg-success text-white">
			<span>Chat Whatsapp</span>
			{{-- <span id="close" class="float-right pointer">close</span> --}}
      <button type="button" id="close" class="close float-right pointer" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
		</div>
		<div class="card-body bg-light pb-0">
			{{-- <div class="form-group">
				<div class="alert alert-info bg-light text-dark border-0 shadow-sm">Assalamu'alaikum...</div>
			</div> --}}
		</div>
		<div class="card-footer border-0 bg-light">
			<div class="input-group flex-nowrap">
				<textarea id="message" class="form-control shadow-none rounded text-dark" resize="none" rows="3" autofocus></textarea>
          {{-- Hi desainin.id, ada paket yang oke buat bantu kebutuhan desain grafis saya? Lagi butuh desain nih.. --}}
				<div class="input-group-prepend">
					<span class="input-group-text bg-transparent border-0 text-dark pointer" id="send">Send</span>
				</div>
			</div>
		</div>
	</div>
  
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; {{ date('Y')}} <span class="font-weight-bold text-dark ml-1" target="_blank">Web Developer Specialist Intern <span class="text-orange">desainin.id</span></span>
          </div>
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
  <!-- Optional JS -->
  <script src={{ asset("argon/assets/vendor/onscreen/dist/on-screen.umd.min.js")}}></script>
  <!-- Argon JS -->
  <script src={{ asset("argon/assets/js/argon.js?v=1.1.0")}}></script>
  <!-- Demo JS - remove this in your project -->
  <script src={{ asset("argon/assets/js/demo.min.js")}}></script>
  {{-- Popup chat window --}}
  <script>
    $(document).ready(function() {

      $('#open').click(function() {
        $(this).addClass("d-none");
        $('#form').removeClass("d-none");
      });

      $('#close').click(function() {
        $('#open').removeClass("d-none");
        $('#form').addClass("d-none");
      });

      $('#send').click(function() {
        var msg = $("#message").val()
        if (msg != "") {
          $(location).attr('href','https://wa.me/6281311868583?text='+msg);				
        }
      });
    });
  </script>
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  </body>

  </html> 