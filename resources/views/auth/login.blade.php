@extends('layouts.app')

@section('content')
<div class="container-full h-100">
    <div class="row justify-content-center h-100">
      <!-- left -->
        <div class="col-md-8 login-left-panel h-100">
          <div class="hexagon-top"></div>
          <div class="hexagon-bottom"></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-8 content-area">
                <h1 class="font-weight-bold text-orange">Welcome to Mabrur</h1>
                <h6 class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h6>
                <div class="mt-3">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/3nQNiWdeH2Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- right -->
        <div class="col-md-4 login-right-panel">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-12 text-center">
                <div class="mt-5">
                  <img src="{{asset('images/logo.png')}}" alt="">

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
                  <div class="text-left pl-4 mt-3">
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
@endsection
