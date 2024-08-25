<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logo.jpeg') }}" type="image/x-icon">
    <meta name="author" content="Raihan Chowdhury">
    <title>@yield('title')</title>
    @yield('meta')
    <link rel="stylesheet" href="style.css">
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
                <div class="d-none d-md-block">
                    <ul class="d-flex list-unstyled gap-5">
                        <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('fruit/vegetables') }}">Fruit and vegetables</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('starchy/food') }}">Starchy food</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('dairy') }}">Dairy</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('protein') }}">Protein</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('fat') }}">Fat</a></li>
                    </ul>
                </div>
                <div class="d-block d-md-none">
                    <i class="fa-solid fa-bars fs-1 open_btn" style="cursor: pointer"></i>
                </div>
            </div>
        </div>
        <div class="menu_list d-none d-md-none bg-white p-3 shadow-lg">
            <i class="fa-solid fa-xmark fs-1 bg-danger p-2 rounded cursor-pointer close_btn" style="cursor: pointer"></i>
            <ul class="list-unstyled gap-5">
                <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Home</a></li>
                <li class="nav-item py-3"><a class="nav-link" href="{{ asset('fruit/vegetables') }}">Fruit and vegetables</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ asset('starchy/food') }}">Starchy food</a></li>
                <li class="nav-item py-3"><a class="nav-link" href="{{ asset('dairy') }}">Dairy</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ asset('protein') }}">Protein</a></li>
                <li class="nav-item pt-3"><a class="nav-link" href="{{ asset('fat') }}">Fat</a></li>
            </ul>
        </div>
    </header>
    {{-- header section design end form here --}}

    {{-- main section design start form here --}}
    <main>
        {{-- search section design start from here --}}

        {{-- search section design end from here --}}
        @yield('content')
    </main>
    {{-- main section design end form here --}}

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- javascript file linked up --}}
    <script src="{{ asset('script.js') }}"></script>
  </body>
</html>