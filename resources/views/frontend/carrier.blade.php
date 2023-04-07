@extends('frontend.main-singlepage')

@section('content')

<a href="/#carrier" class="btn btn-secondary mt-5">< Back</a>
<div class="mb-5 mt-3">
  <h1>{{ $carrier->carrier_title }}</h1>
  <p>{!! $carrier->description !!}</p>
</div>

@endsection