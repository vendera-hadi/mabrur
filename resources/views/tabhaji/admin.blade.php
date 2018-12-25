<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <form class="form-inline" action="" method="get">
        <div class="form-group mb-2 mr-2">
          <input type="text" name="name" class="form-control" placeholder="Search User" value="{{Request::get('name')}}">
        </div>
        <div class="form-group mb-2">
          <select class="form-control" name="category_id">
            <option value="">All</option>
            @foreach(App\Models\Category::all() as $cat)
              <option value="{{$cat->id}}" {{Request::get('category_id') == $cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group my-2 ml-2">
          <button type="submit" class="btn btn-primary mb-2 form-control">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    @foreach($users as $user)
    <!-- card -->
    <div class="col-sm-6 mb-4">
      <div class="card">
        <img class="card-img-top" src="{{asset('storage/'.$user->scan_tabungan)}}" alt="Card image cap">
        <div class="card-body">
          <a href="{{asset('storage/'.$user->scan_tabungan)}}" class="float-right" download><i class="fa fa-download"></i></a>
          <h5 class="card-title">{{$user->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$user->email}}</h6>
        </div>
      </div>
    </div>
    <!-- card -->
    @endforeach
  </div>

  <div class="row">
    <div class="col-sm-12">
      {{$users->links()}}
    </div>
  </div>
</div>
