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
        
      </div>
    </div>
  </div>
@endsection
