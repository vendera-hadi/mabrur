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
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  @endif

                  @if(\Auth::user()->role == 'admin')
                    @include('tabhaji.admin')
                  @else
                    @include('tabhaji.member')
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
