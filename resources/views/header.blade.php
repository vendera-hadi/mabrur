<div class="container-full w-100 p-3">
<h1>
  {{$title}}
  <a class="float-right" href="{{ route('logout') }}"
     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <i class="fa fa-sign-out text-dark"></i>
  </a>
</h1>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</div>
