<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  </head>
  <body>
    
    <div class="hero bg-warning">
      <nav>
        <div class="toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      
        <div class="navbar">
          <div class="container">
            <div class="navbar-logo">
              <img class="img-fluid" src="img/navbar-logo.png" alt="Navbar Logo">
            </div>
            <div class="nav-item">
              <div class="nav-link"><a href="/">Beranda</a></div>
              <div class="nav-link"><a href="/#feature">Fitur</a></div>
              <div class="nav-link"><a href="/#promotion">Daftar</a></div>
              <div class="nav-link"><a href="/#about">Tentang</a></div>
              <div class="nav-link"><a href="/#carrier">Karir</a></div>
            </div>
            <div class="auth">
              {{-- <div class="btn btn-outline-light"><a href="">Sign in</a></div>
              <div><a href=""><i class="bi bi-person-circle"></i></a></div> --}}
            </div>
          </div>
        </div>
      </nav>   
    </div>

    <div class="container">
      @yield('content')
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>