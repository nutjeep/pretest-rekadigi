@extends('backend.main', ['title' => $title])

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
    <h1 class="text-uppercase">{{ $title }}</h1>
  </div>
  <a href="/dashboard" class="btn btn-outline-dark mb-3">< Back</a>
  <div class="raw d-flex">
    <div class="col-lg-8">
      <div class="tab">
        <form action="/dashboard/category/store" method="post" enctype="multipart/form-data">
        @csrf
          <div class="mb-3">
            @error('category_title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <label for="category_title" class="form-label">Nama Kategori</label>
            <input value="{{ old('category_title') }}" type="text" class="form-control" id="category_title" name="category_title">
          </div>
          <input type="hidden" class="form-control" id="category_slug" name="slug">
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
            <textarea value="{{ old('description') }}" name="description" id="summernote"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    // slug 
    const titleCategory = document.querySelector('#category_title');
    const slugCategory = document.querySelector('#category_slug');
  
    titleCategory.addEventListener('keyup', function() {
      let preslug = titleCategory.value;
      preslug = preslug.replace(/ /g,"-");
      slugCategory.value = preslug.toLowerCase();
    });
  </script>
@endsection
