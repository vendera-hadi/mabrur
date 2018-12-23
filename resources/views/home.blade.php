@extends('layouts.app')

@section('content')
<div class="container-full h-100">
    <div class="row justify-content-center h-100">
      <!-- left -->
      @include('leftnav', ['selected' => 'scan'])
      <!-- right -->
        <div class="col-md-9 shadow-left h-100">
          @include('header', ['title' => 'Scan/Photo'])

        </div>
    </div>
</div>
@endsection
