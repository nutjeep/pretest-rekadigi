@extends('backend.main', ['title' => $title])

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-dark">
    <h1 class="text-uppercase">{{ $title }}</h1>
  </div>

  @if(session()->has('update-link'))
  <div class="alert alert-warning alert-dismissible fade show bg-warning text-white border-0" role="alert" data-bs-theme="dark">
    {{ session('update-link') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="raw d-flex">
    <div class="col-lg-8">
      <div class="tab">
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
                <a title="Edit" href="/pages/edit/terms">Edit</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Privacy</td>
              <td class="d-flex">
                <a title="Edit" href="/pages/edit/privacy">Edit</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Kritik dan Saran</td>
              <td class="d-flex">
                <a title="Edit" href="/pages/edit/kritik-saran">Edit</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
