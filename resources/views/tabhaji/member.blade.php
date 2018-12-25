<form action="{{route('home')}}" method="post" enctype="multipart/form-data">
  @csrf
  <button type="submit" class="btn btn-primary float-right">Submit</button>
  <div class="form-group">
    <label for="email">Status:</label>
    <p class="{{ empty(Auth::user()->scan_tabungan) ? 'text-danger' : 'text-success' }} font-weight-bold">
      {{ empty(Auth::user()->scan_tabungan) ? "Belum Upload" : "Sudah Upload" }}
    </p>
  </div>
  @if(!empty(Auth::user()->scan_tabungan))
  <div class="form-group">
    <label for="email">Hasil Upload:</label><br>
    <img src="{{asset('storage/'.Auth::user()->scan_tabungan)}}" style="max-width:600px" alt="">
  </div>
  @endif
  <div class="form-group">
    <label for="email">{{ !empty(Auth::user()->scan_tabungan) ? "Reupload:" : "Upload:" }}</label>
    <upload-preview></upload-preview>
  </div>
</form>
