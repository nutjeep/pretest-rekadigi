<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GAS | @yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
  </head>
  <body>
    
    <div class="container">
      <div class="card">
        @yield('card')
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
      const password = document.querySelectorAll(".card .bi");
      const openEye = document.querySelector(".card .bi-eye");
      const closeEye = document.querySelector(".card .bi-eye-slash");
      const checkbox = document.querySelector(".card .checkbox");
      const input = document.querySelector(".card #password");

      closeEye.style.display = "none";

      checkbox.addEventListener("click", function () {
          if (input.type === "password") {
              input.type = "text";
              closeEye.style.display = "inherit";
          } else {
              input.type = "password";
              closeEye.style.display = "none";
          }
      });
    </script>
    
  </body>
</html>