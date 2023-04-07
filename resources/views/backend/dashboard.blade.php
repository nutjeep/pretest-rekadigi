@extends('backend.main', ['title' => $title])


@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
    <h1 class="text-uppercase">{{ $title }}</h1>
  </div>

  <div class="raw d-flex">
    <div class="col-lg-6">
      @if(session()->has('add-category'))
      <div class="alert alert-success alert-dismissible fade show bg-success text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('add-category') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('update-category'))
      <div class="alert alert-warning alert-dismissible fade show bg-warning text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('update-category') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('delete-category'))
      <div class="alert alert-danger alert-dismissible fade show bg-danger text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('delete-category') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="tab" id="tab-category">
        <h4>Kategori Toko</h4>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Kategori</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)                
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->category_title }}</td>
              <td class="d-flex">
                <a title="Edit" class="btn btn-warning btn-sm me-2" href="/dashboard/category/edit/{{ $category->slug }}">Edit</a>
                <form action="/dashboard/category/delete/{{ $category->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button title="Delete" class="btn btn-outline-danger btn-sm" onclick="confirm('Yakin menghapus data ?')">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="/dashboard/category/add" class="btn btn-primary">Tambah Kategori</a href="">
      </div>

      @if(session()->has('add-carrier'))
      <div class="alert alert-success alert-dismissible fade show bg-success text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('add-carrier') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('update-carrier'))
      <div class="alert alert-warning alert-dismissible fade show bg-warning text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('update-carrier') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('delete-carrier'))
      <div class="alert alert-danger alert-dismissible fade show bg-danger text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('delete-carrier') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="tab" id="tab-carrier">
        <h4>Karir</h4>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Kategori</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($carriers as $carrier)                
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $carrier->carrier_title }}</td>
              <td class="d-flex">
                <a title="Edit" class="btn btn-warning btn-sm me-2" href="/dashboard/carrier/edit/{{ $carrier->slug }}">Edit</a>
                <form action="/dashboard/carrier/delete/{{ $carrier->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button title="Delete" class="btn btn-outline-danger btn-sm" onclick="confirm('Yakin menghapus data ?')">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="/dashboard/carrier/add" class="btn btn-primary">Tambah Karir</a href="">
      </div>
    </div>



    <div class="col-lg-5 offset-lg-1">
      @if(session()->has('add-feature'))
      <div class="alert alert-success alert-dismissible fade show bg-success text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('add-feature') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('update-feature'))
      <div class="alert alert-warning alert-dismissible fade show bg-warning text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('update-feature') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('delete-feature'))
      <div class="alert alert-danger alert-dismissible fade show bg-danger text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('delete-feature') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="tab" id="tab-feature">
        <h4>Fitur</h4>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Fitur</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($features as $feature)                
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $feature->feature_title }}</td>
              <td class="d-flex">
                <button type="button" class="btn btn-sm btn-warning me-2"  data-bs-toggle="modal" data-bs-target="#editFeature{{ $feature->slug }}">Edit</button>
                @include('backend.components.modal-edit-feature')
                <form action="/dashboard/delete/{{ $feature->slug }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" title="Delete" class="btn btn-sm btn-outline-danger" onclick="confirm('Yakin menghapus data {{ $feature->feature_title }} ?')">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFeature">Tambah Fitur</button>
      </div>

      @if(session()->has('update-link'))
      <div class="alert alert-warning alert-dismissible fade show bg-warning text-white border-0" role="alert" data-bs-theme="dark">
        {{ session('update-link') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="tab" id="tab-link">
        <h4>Links</h4>
        @foreach ($links as $item)
          <form action="/dashboard/link/update/{{ $item->id }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="instagram" class="form-label">Instagram</label>
              <input type="text" class="form-control" id="instagram" name="instagram" placeholder="{{ $item->instagram }}">
            </div>
            <div class="mb-3">
              <label for="facebook" class="form-label">Facebook</label>
              <input type="text" class="form-control" id="facebook" name="facebook" placeholder="{{ $item->facebook }}">
            </div>
            <div class="mb-3">
              <label for="google_play" class="form-label">Google Play</label>
              <input type="text" class="form-control" id="google_play" name="google_play" placeholder="{{ $item->google_play }}">
            </div>
            <button type="submit" class="btn btn-warning">Update Link</button>           
          </form> 
        @endforeach
      </div>
    </div>
  </div>

  @include('backend.components.modal-add-feature')
  @include('backend.components.modal-edit-feature')
@endsection
