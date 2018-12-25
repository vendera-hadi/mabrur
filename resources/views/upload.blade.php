@extends('layouts.app')

@section('content')
<div class="container-full h-100">
    <div class="row justify-content-center h-100">
      <!-- left -->
      @include('leftnav', ['selected' => 'upload'])
      <!-- right -->
        <div class="col-md-9 shadow-left h-100">
          @include('header', ['title' => 'Link VLOG'])

          <div class="container panel h-80">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <!-- content -->
                <div id="app">
                  @if (session('success'))
                  <div class="alert alert-success mb-4" role="alert">
                      {{ session('success') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  @endif
                  <form action="{{route('linkupload')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary float-right" id="submit" disabled="disabled">Submit</button>
                    <div class="form-group">
                      <label>Status:</label>
                      <p class="{{ empty(Auth::user()->video) ? 'text-danger' : 'text-success' }} font-weight-bold">
                        {{ empty(Auth::user()->video) ? "Belum Upload" : "Sudah Upload" }}
                      </p>
                    </div>
                    <div class="form-group">
                      <label>Judul VLOG:</label>
                      <input type="text" name="title" placeholder="Judul VLOG" value="{{!empty(Auth::user()->video) ? Auth::user()->video->title : ''}}" class="form-control w-50" required>
                    </div>
                    @if(!empty(Auth::user()->video))
                    <div class="form-group">
                      <label>Link VLOG:</label>
                      <div class="embed-responsive embed-responsive-16by9 w-50 mt-3">
                        <iframe class="embed-responsive-item" src="{{Auth::user()->video->embed_code}}" allowfullscreen></iframe>
                      </div>
                    </div>
                    @endif
                    <div class="form-group">
                      <label>{{ !empty(Auth::user()->video) ? "Ganti" : "Masukkan" }} Link Youtube VLOG anda:</label>
                      <video-input></video-input>
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
