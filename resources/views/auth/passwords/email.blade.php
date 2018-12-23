@extends('layouts.app')

@section('content')
<div class="container-full h-100 register">
    <div class="row justify-content-center h-100">
        <div class="col-md-8 text-center panel">
          <a href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" width="200" alt="logo" title="logo" class="mt-3">
          </a>

          <form method="POST" action="{{ route('password.email') }}">
              @csrf

              @if (session('status'))
              <div class="form-group row justify-content-center mt-3">
                  <div class="col-md-6">
                      <div class="alert alert-success" role="alert">
                          Hahahaha
                      </div>
                  </div>
              </div>
              @endif

              <div class="form-group row justify-content-center mt-3">
                  <div class="col-md-6">
                    <input id="email" placeholder="Masukkan Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>

              <div class="form-group row justify-content-center">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-orange form-control">
                        Kirim Email Reset Password
                    </button>
                  </div>
              </div>

          </form>
        </div>
    </div>
</div>
@endsection
