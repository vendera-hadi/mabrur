@extends('layouts.app')

@section('head')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W3DGLQT');</script>
<!-- End Google Tag Manager -->
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-navy">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('login')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('register')}}">Daftar</a>
      </li>
    </ul>
  </div>
</nav>

<section id="banner">
<div class="container-full w-100">
    <div class="row justify-content-center">
      <!-- left -->
        <div class="col-md-12 px-0" style="background-color: #ddf0f6">
          <center><img src="http://lombavlog.bpkh.go.id/images/banner_home.jpg" class="img-fluid main-banner"></center>
        </div>
    </div>
</div>
</section>

<section id="desc">
  <div class="container-full w-100 h-100" style="min-height: 550px; position: relative">
    <div class="hexagon-top"></div>
    <div class="hexagon-bottom"></div>
    <div class="row justify-content-center">
      <div class="col-sm-8 py-5 text-center">
        <h3 style="margin-top: 100px">Apa itu Mina?</h3>
        <p class="px-3" style="margin-top: 40px">Kalau Kamu kreatif dan punya cita-cita untuk naik Haji, ini saatnya kamu mulai menabung untuk wujudkan cita-citamu berangkat ke tanah suci bersama <b>MINA (Mari Tunaikan Haji Selagi Muda)</b> Vlog Competition.</p>
        <p class="px-3">MINA Vlog Competition adalah program yang diselenggarakan oleh <b>Badan Pengelola Keuangan Haji (BPKH)</b> untuk mendukung para insan muda kreatif dalam menunaikan ibadah Haji sejak dini dengan hadiah puluhan juta rupiah.</p>
      </div>
    </div>
  </div>
</section>

<section id="how">
  <div class="container-full w-100 h-100" style="background-color: #ddf0f6">
    <div class="row justify-content-center">
      <div class="col-sm-8 py-5 text-center">
        <h1 class="how-title">Caranya</h1>
        <!-- content -->
        <div class="row">
          <div class="col-sm-1 how-arrow">
          </div>
          <div class="col-sm-3">
            <img src="{{asset('images/cara-1.png')}}" class="img-fluid" alt="">
            <p>Buka Tabungan Haji terlebih dahulu di Bank Syariah atau Tabungan Arum Pegadaian</p>
          </div>
          <div class="col-sm-1 how-arrow">
            <img src="{{asset('images/arrow.png')}}" class="img-fluid" style="margin-top: 85px" alt="">
          </div>
          <div class="col-sm-3">
            <img src="{{asset('images/cara-2.png')}}" class="img-fluid" alt="">
            <p>Buat kreasi video vlog kamu denga  tema <b>#TipsNabungHaji</b> atau <b>HajiJamanNow</b></p>
          </div>
          <div class="col-sm-1 how-arrow">
            <img src="{{asset('images/arrow.png')}}" class="img-fluid" style="margin-top: 85px" alt="">
          </div>
          <div class="col-sm-3">
            <img src="{{asset('images/cara-3.png')}}" class="img-fluid" alt="">
            <p>Upload materi video vlog kamu ke <b>www.lombavlogbpkh.com</b></p>
          </div>
        </div>
        <!-- content -->
      </div>
    </div>
  </div>
</section>

<section id="video">
  <div class="container-full w-100 h-100" style="background-color: #259dab">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <div class="my-5">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/8ksKXD9lHQk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>

<section id="login">
  <div class="container-full h-100" style="background-color: #ddf0f6; position: relative">
    <div class="hexagon-top"></div>
    <div class="hexagon-bottom"></div>
    <div class="row justify-content-center w-100">
      <!-- right -->
      <div class="col-md-4 login-panel-new">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 text-center">
              <div class="mt-5">
                <!-- <img src="{{asset('images/logo.png')}}" class="img-fluid w-75" alt=""> -->
                <h1 style="font-weight: bold; font-size: 48px; color: #00b6a0">Login</h1>

                <form class="mt-5" action="{{ route('login') }}" method="post">
                  @csrf
                  <!-- regis -->
                  <div class="form-check">
                    <a href="{{route('register')}}" class="btn btn-orange form-control">DAFTAR</a>
                  </div>
                  <!-- atau -->
                  <p class="strike-bg ml-3 mt-3"><span style="background-color: #ddf0f6">atau</span></p>
                  <!-- login form -->
                  <div class="form-check">
                    <input id="email" type="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>
                  <div class="form-check mt-3">
                    <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-check mt-3">
                    <button type="submit" class="btn btn-orange form-control">
                      LOG IN
                    </button>
                  </div>
                  <div class="form-check mt-3">
                    <a href="{{route('oauth_login')}}">
                      <img src="{{asset('images/google-btn.png')}}" class="w-100" alt="" title="register with google">
                    </a>
                  </div>
                </form>
                <div class="text-left pl-4 mt-3 mb-5">
                  <a href="{{ route('password.request') }}" class="text-dark">
                    Lupa Password ?
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Footer -->
<footer class="page-footer font-small teal pt-4 bg-navy">
    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">
      <div class="row justify-content-center">
        <div class="col-sm-4 text-center">
          <!-- icon -->
          <div class="row">
            <div class="col-sm-4 mb-3">
              <a href="https://www.facebook.com/bpkhindo/" target="_blank">
                <img src="{{asset('images/fb.png')}}" alt="">
                <span class="text-white">BPKH RI</span>
              </a>
            </div>
            <div class="col-sm-4 mb-3">
              <img src="{{asset('images/instagram.png')}}" alt="">
              <span class="text-white">BPKH RI</span>
            </div>
            <div class="col-sm-4 mb-3">
              <a href="https://www.youtube.com/channel/UCRcpNUXfgxMCvzqqoC0Zu1A">
                <img src="{{asset('images/youtube.png')}}" alt="">
                <span class="text-white">BPKH RI</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white">© BPKH 2019</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3DGLQT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@endsection
