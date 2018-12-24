@extends('layouts.app')

@section('content')
<div class="container-full h-100">
    <div class="row justify-content-center h-100">
      <!-- left -->
      @include('leftnav', ['selected' => 'upload'])
      <!-- right -->
        <div class="col-md-9 shadow-left h-100">
          @include('header', ['title' => 'Upload Video'])

          <div class="container panel h-80">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <!-- content -->
                  
                <!-- content -->
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
