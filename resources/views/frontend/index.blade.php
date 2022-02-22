 @extends('frontend.master')
 @section('content')
     
   <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header bg-gradient-orange pt-5 pb-7">
       <div class="container">
         <div class="header-body">
           <div class="row align-items-center">
             <div class="col-lg-6">
               <div class="pr-5">
                 <h1 class="display-2 text-dark font-weight-bold mb-0">Bikin Desain Apa Aja.</h1>
                 <h1 class="display-2 text-dark font-weight-bold mb-0">Bisa Langganan.</h1>
                 <h1 class="display-2 text-white font-weight-bold mb-0">Unlimited. Gak Ribet</h1>
                 <p class="text-dark mt-4 font-weight-bold">
                  Solusi design grafis yang bakal bikin kamu: <br>
                  > Gak Perlu Lagi bayar karyawan! <br>
                  > Dapetin Desain Cepat 1-2 Hari Kerja <br>
                  > Dijamin Hasil Menjual dan Profesional
                 </p>
                 <div class="mt-5">
                  @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a href="{{ url('/dashboard') }}" class="btn btn-neutral my-2 text-dark rounded">Home</a>
                      @else
                          <a href="{{ route('login') }}" class="btn btn-neutral my-2 text-dark rounded">Masuk</a>
  
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="btn btn-default my-2 rounded">Daftar Sekarang</a>
                          @endif
                      @endauth
                  </div>
                  @endif
                 </div>
               </div>
             </div>
             <div class="col-lg-6 d-none d-sm-block mt-5">
               <div class="">
                 <img class="img-fluid" src={{ asset("img/people.png")}}>
               </div>
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
     <section class="py-6 pb-9 bg-default" id="swipedown">
      <div class="container">
        <div class="row justify-content-center text-center">
           <div class="col-md-8">
             <h2 class="display-2 text-white">Solusi Jasa Desain Unlimited</h3>
               <p class="lead text-white">
                Apaan sih <span class="font-weight-bold text-orange">Jasa Desain Unlimited</span> itu ?
               </p>
           </div>
         </div>
      </div> 
     </section>
     <section class="section section-lg pt-lg-0 mt--7 pb-6">
       <div class="container">
         <div class="row justify-content-center">
           <div class="col-lg-12">
             <div class="row">
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-primary text-white rounded-circle mb-4">
                       <i class="fas fa-sync-alt"></i>
                     </div>
                     <h4 class="display-4 text-primary text-uppercase">Sekali Bayar, Bikin Desain Sepuasnya!</h4>
                     <p class="font-weight-bold text-dark description mt-3">Dapatkan desain unlimited dan bebas revisi sampai jadi. Sekali bayar untuk paket bulanan kamu, bisa request desain sepuasnya. Bebas Revisi Sampai Jadi.</p>
                     <div>
                       <span class="badge badge-pill badge-primary">#sekalibayar</span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-green text-white rounded-circle mb-4">
                       <i class="fas fa-user-check"></i>
                     </div>
                     <h4 class="display-4 text-success text-uppercase">Tim Desain Kamu Sendiri!</h4>
                     <p class="font-weight-bold text-dark description mt-3">Tim desain profesional kamu yang akan menyesuaikan dengan kebutuhan dan spesifikasi desain kamu. Karena tim dedikasi untuk kamu, kita akan makin paham dengan kebutuhan kamu. Urusan project bisa pakai Whatsapp!</p>
                     <div>
                       <span class="badge badge-pill badge-success">#timdesainkamu</span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-orange text-white rounded-circle mb-4">
                       <i class="fas fa-coins"></i>
                     </div>
                     <h4 class="display-4 text-warning text-uppercase">Hemat, Bisa Beli Satuan!</h4>
                     <p class="text-dark font-weight-bold description mt-3">Tapi kalau belom butuh desain banyak? Gampang. Beli satuan aja, dijamin hemat daripada kompetitor. Tapi Gak murahan!</p>
                     <div>
                       <span class="badge badge-pill badge-warning">#bukanmurahan</span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-6 bg-neutral">
       <div class="container">
         <div class="row row-grid align-items-center text-center">
           <div class="col-md">
             <img src={{ asset("img/sponsor-logo.png")}} class="img-fluid ml-5">
           </div>
         </div>
       </div>
     </section>
     <section class="pt-6">
       <div class="container">
         <div class="row row-grid align-items-center">
           <div class="col-md-6 order-md-2">
             <img src={{ asset("img/female.png")}} class="img-fluid">
           </div>
           <div class="col-md-6 order-md-1">
             <div class="pr-md-5">
               <h1>1. Mau bayar jasa desain lepasan,</h1>
               <h1 class="display-4 font-weight-bold text-red">gak sesuai selera ?</h1>
               <h1>2. Jasa desain lain cuma bisa 3x revisi,</h1>
               <h1 class="display-4 font-weight-bold text-red">jadi takut sayang duit ?</h1>
               <h1>3. Dapet jasa desain yang cocok,</h1>
               <h1 class="display-4 font-weight-bold text-red">nego mulu tiap bikin desain baru ?</h1>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-6">
       <div class="container">
         <div class="row row-grid align-items-center">
           <div class="col-md-6">
             <img src={{ asset("img/male.png")}} class="img-fluid">
           </div>
           <div class="col-md-6">
             <div class="pr-md-5">
              <h1>4. Mau punya karyawan desain,</h1>
              <h1 class="display-4 font-weight-bold text-red">ongkos-nya masih kurang ?</h1>
              <h1>5. Udah punya karyawan desain,</h1>
              <h1 class="display-4 font-weight-bold text-red">ehh... tapi hasilnya gak menjual ?</h1>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-6">
       <div class="container">
         <div class="row justify-content-center text-center">
           <div class="col-md-6 text-dark">
             <h2 class="display-4">Jangan khawatir lagi, Kamu cuma butuh:</h2>
             <h2 class="display-2">Solusi Jasa Desain Unlimited</h2>
             <a class="btn btn-outline-default" href="#swipedown">Yuk Swipe Down</a>
           </div>
         </div>
       </div>
    </section>
    <section class="py-6">
      <div class="container">
      <div class="row justify-content-center text-center my-5">
        <div class="col-md-9 text-dark">
          <h2 class="display-3">Dapatkan semua desain dibawah ini, Unlimited!</h2>
          <p class="lead mt--3">Paket Langganan kami bisa untuk memenuhi semua jenis kebutuhan desain grafis kamu</p>
        </div>
      </div>
      <div class="row row-grid align-items-center justify-content-center text-center">
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_logo.png")}} class="img-fluid">
        </div>
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/sosmed.png")}} class="img-fluid">
        </div>
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_hijab.png")}} class="img-fluid">
        </div>
      </div>
      <div class="row row-grid align-items-center justify-content-center text-center">
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_packaging.png")}} class="img-fluid">
        </div>
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_poster.png")}} class="img-fluid">
        </div>
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_banner.png")}} class="img-fluid">
        </div>
      </div>
      <div class="row row-grid align-items-center justify-content-center text-center">
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_presentasi.png")}} class="img-fluid">
        </div>
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_compro.png")}} class="img-fluid">
        </div>
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_brosur.png")}} class="img-fluid">
        </div>
      </div>
      <div class="row row-grid align-items-center justify-content-center text-center">
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_tshirt.png")}} class="img-fluid">
        </div>
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_alat-tulis.png")}} class="img-fluid">
        </div>
        <div class="col-md-4 order-md-2 px-8">
          <img src={{ asset("img/Icon_website.png")}} class="img-fluid">
        </div>
      </div>
      </div>
    </section>
    <section class="py-7 section-nucleo-icons bg-white overflow-hidden">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-3">Nucleo Icons</h2>
            <p class="lead">
              The official package contains over 21.000 icons which are looking great in combination with Argon Design System. Make sure you check all of them and use those that you like the most.
            </p>
            <div class="btn-wrapper">
              <a href="./docs/foundation/icons.html" class="btn btn-primary">View demo icons</a>
              <a href="https://nucleoapp.com/?ref=1712" target="_blank" class="btn btn-default mt-3 mt-md-0">View all icons</a>
            </div>
          </div>
        </div>
        <div class="blur--hover">
          <a href="./docs/foundation/icons.html">
            <div class="icons-container blur-item mt-5">
              <!-- Center -->
              <i class="icon ni ni-diamond"></i>
              <!-- Right 1 -->
              <i class="icon icon-sm ni ni-album-2"></i>
              <i class="icon icon-sm ni ni-app"></i>
              <i class="icon icon-sm ni ni-atom"></i>
              <!-- Right 2 -->
              <i class="icon ni ni-bag-17"></i>
              <i class="icon ni ni-bell-55"></i>
              <i class="icon ni ni-credit-card"></i>
              <!-- Left 1 -->
              <i class="icon icon-sm ni ni-briefcase-24"></i>
              <i class="icon icon-sm ni ni-building"></i>
              <i class="icon icon-sm ni ni-button-play"></i>
              <!-- Left 2 -->
              <i class="icon ni ni-calendar-grid-58"></i>
              <i class="icon ni ni-camera-compact"></i>
              <i class="icon ni ni-chart-bar-32"></i>
            </div>
            <span class="blur-hidden h5 text-success">Explore all the 21.000+ Nucleo Icons</span>
          </a>
        </div>
      </div>
    </section>
    <section class="py-7">
      <div class="container">
        <div class="row row-grid justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-3">Do you love this awesome <span class="text-success">Dashboard for Bootstrap 4?</span></h2>
            <p class="lead">Cause if you do, it can be yours now. Hit the button below to navigate to get the free version or purchase a license for your next project. Build a new web app or give an old Bootstrap project a new look!</p>
            <div class="btn-wrapper">
              <a href="https://www.creative-tim.com/product/argon-dashboard" class="btn btn-neutral mb-3 mb-sm-0" target="_blank">
                <span class="btn-inner--text">Get FREE version</span>
              </a>
              <a href="https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-primary btn-icon mb-3 mb-sm-0">
                <span class="btn-inner--icon"><i class="ni ni-basket"></i></span>
                <span class="btn-inner--text">Purchase now</span>
                <span class="badge badge-md badge-pill badge-floating badge-danger border-white">$79</span>
              </a>
            </div>
            <div class="text-center">
              <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
              <div class="row justify-content-center">
                <div class="w-10 mx-2 mb-2">
                  <a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank" data-toggle="tooltip" data-original-title="Bootstrap 4 - Most popular front-end component library">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg" class="img-fluid rounded-circle shadow shadow-lg--hover">
                  </a>
                </div>
                <div class="w-10 mx-2 mb-2">
                  <a href=" https://www.creative-tim.com/product/vue-argon-dashboard" target="_blank" data-toggle="tooltip" data-original-title="Vue.js - The progressive javascript framework">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid rounded-circle">
                  </a>
                </div>
                <div class="w-10 mx-2 mb-2">
                  <a href=" https://www.creative-tim.com/product/argon-dashboard" target="_blank" data-toggle="tooltip" data-original-title="Sketch - Digital design toolkit">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid rounded-circle">
                  </a>
                </div>
                <div class="w-10 mx-2 mb-2">
                  <a href=" https://www.creative-tim.com/product/argon-dashboard-angular" target="_blank" data-toggle="tooltip" data-original-title="Angular - One framework. Mobile &amp; desktop">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid rounded-circle">
                  </a>
                </div>
                <div class="w-10 mx-2 mb-2">
                  <a href=" https://www.creative-tim.com/product/argon-dashboard-react" target="_blank" data-toggle="tooltip" data-original-title="React - A JavaScript library for building user interfaces">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid rounded-circle">
                  </a>
                </div>
                <div class="w-10 mx-2 mb-2">
                  <a href=" https://www.creative-tim.com/product/argon-dashboard-laravel" target="_blank" data-toggle="tooltip" data-original-title="Laravel - The PHP Framework For Web Artisans">
                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/laravel_logo.png" class="img-fluid rounded-circle">
                  </a>
                </div>
                <div class="w-10 mx-2 mb-2">
                  <a href=" https://www.creative-tim.com/product/argon-dashboard-nodejs" target="_blank" data-toggle="tooltip" data-original-title="Node.js - a JavaScript runtime built on Chrome's V8 JavaScript engine">
                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/nodejs-logo.jpg" class="img-fluid rounded-circle">
                  </a>
                </div>
                <div class="w-10 mx-2 mb-2">
                  <a href=" https://www.adobe.com/products/photoshop.html" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Adobe Photoshop - Software for digital images manipulation">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg" class="img-fluid rounded-circle opacity-3">
                  </a>
                </div>
              </div>
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   </div>

   @endsection
 