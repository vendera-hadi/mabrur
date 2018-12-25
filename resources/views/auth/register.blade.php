@extends('layouts.app')

@section('content')
<div class="container-full h-100 register">
    <div class="row justify-content-center w-100 h-100">
        <div class="col-md-8 text-center">
          <a href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" width="200" alt="logo" title="logo" class="mt-3">
          </a>
          <p class="mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <a href="{{route('oauth_login')}}">
            <img src="{{asset('images/google-btn.png')}}" alt="" title="register with google">
          </a>
          <p class="strike-bg mt-3"><span>atau</span></p>

          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row justify-content-center">
                <div class="col-md-6">
                    <input id="name" type="text" placeholder="Nama Lengkap" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-md-6">
                    <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row justify-content-center">

                <div class="col-md-6">
                    <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row justify-content-center">

                <div class="col-md-6">
                    <input id="password-confirm" placeholder="Masukkan Password Kembali" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row justify-content-center">

                <div class="col-md-6">
                  <select name="category" class="form-control" required>
                    <option value="" selected>Pilih Kategori</option>
                    @foreach(App\Models\Category::all() as $cat)
                      <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>

            <div class="form-group row justify-content-center">

                <div class="col-md-6 pl-4 ml-3">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                  <label class="form-check-label" for="defaultCheck1">
                    Dengan mendaftar, kamu setuju degnan ketentuan dan kebijakan privasi. <a href="#">Pelajari lebih lanjut</a>
                  </label>
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-orange form-control">
                        DAFTAR
                    </button>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection
