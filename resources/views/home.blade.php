@extends('layouts.app')

@section('content')
<div class="container-full w-100 h-100">
    <div class="row justify-content-center h-100">
      <!-- left -->
      @include('leftnav', ['selected' => 'tabungan'])
      <!-- right -->
        <div class="col-md-9 shadow-left h-100">
          @include('header', ['title' => 'Upload Scan / Foto Tabungan Haji'])

          <div class="container panel h-80">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <!-- content -->
                <div id="app">
                  @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                  </div>
                  @endif
                  <form action="{{route('home')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <div class="form-group">
                      <label for="email">Status:</label>
                      <p class="{{ empty(Auth::user()->scan_tabungan) ? 'text-danger' : 'text-success' }} font-weight-bold">
                        {{ empty(Auth::user()->scan_tabungan) ? "Belum Upload" : "Sudah Upload" }}
                      </p>
                    </div>
                    <div class="form-group">
                      <label for="email">Upload:</label>
                      <upload-preview></upload-preview>
                    </div>
                  </form>
                </div>
                <!-- content -->
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
