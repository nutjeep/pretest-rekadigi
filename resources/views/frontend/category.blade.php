@extends('frontend.main-singlepage')

@section('content')

<a href="/#category" class="btn btn-secondary mt-5">< Back</a>
<div class="mb-5 mt-3">
  <h1>{{ $category->category_title }}</h1>
  <p>{!! $category->description !!}</p>
</div>

@endsection