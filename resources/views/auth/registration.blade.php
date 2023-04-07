@extends('auth.main')

@section('title')
    Registration
@endsection

@section('card')
  <form action="/registration" method="post">
    @csrf
    <div class="form-title text-center mb-3"><h5>GAS | Registration</h5></div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="type" class="form-control" id="username" placeholder="username" name="username">
      <label for="username">Username</label>
    </div>
    <div class="form-floating mb-4">
      <i class="bi bi-eye"></i>
      <i class="bi bi-eye-slash"></i>
      <input type="checkbox" class="checkbox">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <label for="password">Password</label>
    </div>

    <div class="d-flex text-center justify-content-center">
      <button type="submit" class="btn btn-warning submit me-3">Register</button>
      <button class="btn btn-outline-warning login"><a href="/login">Login</a></button>
    </div>
  </form>
@endsection