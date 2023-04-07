<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">

    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <!-- include summernote css/js -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('summernote/summernote-lite.css') }}">
    <script src="{{ asset('summernote/summernote-lite.js') }}"></script>

    <style>
      .note-editor .dropdown-toggle::after {
        all: unset;
      }

      .note-editor .note-dropdown-menu, .note-editor .note-modal-footer {
        box-sizing: content-box;
      }
    </style>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  </head>
  <body style="background-color: #e8e8e8;">
    
    <div class="container-fluid">
      <div class="row">

        @include('backend.components.sidebar')

        <main class="content col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @yield('content')
        </main>
        
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

    <!-- Summernote -->
    <script>
      $(document).ready(function() {
        $('.tab #summernote').summernote({
          tabsize: 2,
          height: 400,
          toolbar: [
            ['style', ['bold', 'italic', 'underline']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['view', ['codeview']]
          ]
        });
    });
    </script>

    <script src="{{ asset('js/dashboard.js') }}"></script>
  </body>
</html>
