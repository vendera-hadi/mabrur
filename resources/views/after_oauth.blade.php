@extends('layouts.app')

@section('content')
<div class="container-full h-100 register">
    <div class="row justify-content-center h-100">
        <div class="col-md-8 text-center panel">
          <a href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" width="200" alt="logo" title="logo" class="mt-3">
          </a>

          <form method="POST" action="{{ route('store_google') }}">
              @csrf
              <input type="hidden" name="name" value="{{$name}}">
              <input type="hidden" name="email" value="{{$email}}">
              <input type="hidden" name="google_id" value="{{$google_id}}">


              <div class="form-group row justify-content-center mt-3">
                  <div class="col-md-6">
                    <select class="form-control" name="category_id" required>
                      <option value="">Pilih Kategori</option>
                      @foreach(App\Models\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                      @endforeach
                    </select>

                    @if ($errors->has('category_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category_id') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>

              <div class="form-group row justify-content-center">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-orange form-control">
                        Daftar
                    </button>
                  </div>
              </div>

          </form>
        </div>
    </div>
</div>
@endsection
