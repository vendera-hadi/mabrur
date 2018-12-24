@extends('layouts.app')

@section('content')
<div class="container-full w-100 h-100">
    <div class="row justify-content-center h-100">
      <!-- left -->
      @include('leftnav', ['selected' => 'gallery'])
      <!-- right -->
        <div class="col-md-9 shadow-left h-100">
          @include('header', ['title' => 'Galeri VLOG'])

          <div class="container panel h-80">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <!-- content -->
                @if(empty(\Auth::user()->scan_tabungan))
                <div class="card text-center">
                  <div class="card-header btn-green text-white">
                    Halaman Terkunci
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Maaf, untuk dapat melihat galeri vlog yang diupload peserta lain harap melakukan upload scan / foto tabungan haji terlebih dahulu</h5>
                    <a href="{{route('home')}}" class="btn btn-primary">Ke Upload Scan / Foto Tabungan Haji</a>
                  </div>
                </div>
                @else
                  <div class="container">
                    <div class="row">
                      <!-- video -->
                      <div class="col-sm-6 mb-4">
                        <div class="card">
                          <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Video Goyang itik</h5>
                            <h6 class="card-subtitle mb-2 text-muted">by <a href="#">Zaskia Gotik</a></h6>
                          </div>
                        </div>
                      </div>
                      <!-- video -->

                    </div>
                  @endif

                  </div>
                <!-- content -->
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection