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
<div class="container-full h-100">
    <div class="row justify-content-center h-100">
      <!-- left -->
        <div class="col-md-8 login-left-panel h-100 px-0">
          <img src="http://lombavlog.bpkh.go.id/images/banner_home.jpg" class="img-fluid w-100 h-100">
        </div>
        <!-- right -->
        <div class="col-md-4 login-right-panel">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-12 text-center">
                <div class="mt-5">
                  <img src="{{asset('images/logo.png')}}" class="img-fluid w-75" alt="">

                  <form class="mt-5" action="{{ route('login') }}" method="post">
                    @csrf
                    <!-- regis -->
                    <div class="form-check">
                      <a href="{{route('register')}}" class="btn btn-orange form-control">DAFTAR</a>
                    </div>
                    <!-- atau -->
                    <p class="strike-bg ml-3 mt-3"><span>atau</span></p>
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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3DGLQT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@endsection
