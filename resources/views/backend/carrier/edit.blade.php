@extends('backend.main', ['title' => $title])

@section('content')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
    <h1 class="text-uppercase">{{ $title }}</h1>
  </div>
  <a href="/dashboard" class="btn btn-outline-dark mb-3">< Back</a>
  <div class="raw d-flex">
    <div class="col-lg-8">
      <div class="tab">
        <form action="/dashboard/carrier/update/{{ $carrier->slug }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="mb-3">
            @error('carrier_title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <label for="carrier_title" class="form-label">Nama Karir</label>
            <input value="{{ $carrier->carrier_title, old('carrier_title') }}" type="text" class="form-control" id="carrier_title" name="carrier_title">
          </div>
          <input type="hidden" class="form-control" id="carrier_slug" name="slug">
          <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
            <p class="text-secondary">Max file 500kb</p>
          </div>
          <div class="mb-3">
            @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <label for="summernote" class="form-label">Deskripsi</label>
            <textarea name="description" id="summernote">{{ $carrier->description, old('description') }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    // slug 
    const titlecarrier = document.querySelector('#carrier_title');
    const slugcarrier = document.querySelector('#carrier_slug');
  
    titlecarrier.addEventListener('keyup', function() {
      let preslug = titlecarrier.value;
      preslug = preslug.replace(/ /g,"-");
      slugcarrier.value = preslug.toLowerCase();
    });
  </script>
@endsection
