<div class="col-md-3 login-right-panel h-100 px-0">
  <div class="container-full h-100 px-0 sidebar-container">
      <div class="row justify-content-center w-100">
        <div class="col-md-12 text-center">
          <a href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" width="150" alt="logo" title="logo" class="mt-3">
          </a>
          <h3 class="font-weight-bold mt-3 text-green mb-4">Hi, {{Auth::user()->name}}</h3>
        </div>

      </div>

      <nav class="sidebar-sticky w-100">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ $selected == 'tabungan' ? 'active' : ''}}" href="{{route('home')}}">
              Scan/Foto Tabungan Haji
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $selected == 'gallery' ? 'active' : ''}}" href="{{route('galeri')}}">
              Galeri VLOG
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $selected == 'upload' ? 'active' : ''}}" href="{{route('upload')}}">
              Link VLOG
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ $selected == 'terms' ? 'active' : ''}}" href="{{route('terms')}}">
              S & K
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $selected == 'timeline' ? 'active' : ''}}" href="{{route('timeline')}}">
              Time Line
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $selected == 'faq' ? 'active' : ''}}" href="{{route('faq')}}">
              FAQ
            </a>
          </li>
        </ul>
      </nav>
  </div>
</div>
