@extends('auth.main')

@section('title')
    Login
@endsection

@section('card')
  <form action="/login" method="post">
    @csrf

    @if (session()->has('loginError'))       
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="form-title text-center mb-3"><h5>GAS | Login</h5></div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}" autofocus>
      <label for="floatingInput">Email address</label>
      @error('email')
      <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
        <small>{{ $message }}</small>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>          
      @enderror
    </div>
    <div class="form-floating mb-3">
      <i class="bi bi-eye"></i>
      <i class="bi bi-eye-slash"></i>
      <input type="checkbox" class="checkbox">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <label for="password">Password</label>
    </div>

    <button type="submit" class="btn btn-warning submit">Login</button>
  </form>
@endsection