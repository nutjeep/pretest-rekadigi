@extends('backend.main', ['title' => $title])

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-dark">
    <h1 class="text-uppercase">{{ $title }}</h1>
  </div>

  <a href="/pages" class="btn btn-outline-dark mb-3">< Back</a>

  <div class="raw d-flex">
    <div class="col-lg-8">
      <div class="tab">
        <h4>{{ $terms->title }}</h4>
        <form action="/pages/terms/update/{{ $terms->id }}" method="post">
          @method('put')
          @csrf

          <div class="my-3">
            <label for="summernote" class="form-label">Deskripsi</label>
            <textarea name="description" id="summernote">{{ $terms->description, old('description') }}</textarea>
          </div>
          <button class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
