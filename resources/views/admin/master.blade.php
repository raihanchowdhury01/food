<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/logo.jpeg') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('https://kit.fontawesome.com/cc76e3cc3d.js') }}" crossorigin="anonymous"></script>
    <style>
      .md_width{
            width: 100%;
        }
      @media (min-width: 769px) {
          .md_width{
            width: 50%;
            margin-left: 25%;
        }
          .smd_width{
            width: 50%;
            margin-left: 20%;
        }
      }
  </style>
  </head>
  <body>
    {{-- header section design start form here --}}
    <header>
        <div class="d-flex justify-content-between py-3 px-5 bg-primary text-white align-items-center">
            <div>
              <img style="weight: 60px; height: 60px; border-radius: 100%" src="{{ url('img/logo.jpeg') }}" alt="there is a logo image">
            </div>
            <div>
              <ul class="d-flex list-unstyled gap-5">
                <li class="nav-item"><a class="nav-link" href="{{ asset('admin/dashboard') }}">View</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ asset('admin/dashboard/input') }}">Input</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ asset('admin/dashboard/traffic') }}">SEO</a></li>
              </ul>
                {{-- <i class="fa-solid fa-bars"></i> --}}
            </div>
        </div>
    </header>
    {{-- header section design end form here --}}

    {{-- main section design start form here --}}
    <main>
        @yield('content')
    </main>
    {{-- main section design end form here --}}

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>