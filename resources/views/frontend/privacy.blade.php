@extends('frontend.main-singlepage')

@section('content')

<a href="/#privacy" class="btn btn-secondary mt-5">< Back</a>
<div class="mb-5 mt-3">
  <h1>{{ $privacy->title }}</h1>
  <p>{!! $privacy->description !!}</p>
</div>

@endsection