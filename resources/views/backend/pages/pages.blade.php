@extends('backend.main', ['title' => $title])

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-dark">
    <h1 class="text-uppercase">{{ $title }}</h1>
  </div>

  @if(session()->has('update-terms'))
  <div class="alert alert-success alert-dismissible fade show bg-success text-white border-0" role="alert" data-bs-theme="dark">
    {{ session('update-terms') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if(session()->has('update-privacy'))
  <div class="alert alert-success alert-dismissible fade show bg-success text-white border-0" role="alert" data-bs-theme="dark">
    {{ session('update-privacy') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="raw d-flex">
    <div class="col-lg-12">
      <div class="tab" id="kritik-saran">
        <h4>Kritik dan Saran</h4>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Message</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kritiksaran as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->phone }}</td>
              <td>{{ $item->message }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="tab" id="pages">
        <h4>Pages List</h4>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pages</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Terms and Condition</td>
              <td class="d-flex">
                @foreach ($termscondition as $term)
                <a title="Edit" href="/pages/terms/edit/{{ $term->id }}">Edit</a>
                @endforeach
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Privacy</td>
              <td class="d-flex">
                @foreach ($privacies as $privacy)
                <a title="Edit" href="/pages/privacy/edit/{{ $privacy->id }}">Edit</a>
                @endforeach
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
