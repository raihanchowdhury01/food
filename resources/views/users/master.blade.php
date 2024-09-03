<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logo.jpeg') }}" type="image/x-icon">
    @yield('meta')
    <meta name="author" content="Raihan Chowdhury">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('https://kit.fontawesome.com/cc76e3cc3d.js') }}" crossorigin="anonymous"></script>
    <style>
      .md_width{
            width: 100%;
        }
        .category_body_color{
            background-color: #f5f4f4;
        }
        .fruitBanner{
            width: 100%;
            height: 60vh;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
  </style>
  </head>
  <body>
    {{-- header section design start form here --}}
    <header>
        <div class="scroll_menu d-flex justify-content-between py-1 px-5 bg-white text-black align-items-center mb-5 text-capitalize">
            <div>
                <img style="weight: 60px; height: 60px; border-radius: 100%" src="{{ url('img/logo.jpeg') }}" alt="there is a logo image">
            </div>
            <div>
                <div class="d-none d-md-block">
                    <ul class="d-flex list-unstyled gap-5 align-items-center">
                        <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('fruit/vegetables') }}">Fruit and vegetables</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('starchy/food') }}">Starchy food</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('dairy') }}">Dairy</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('protein') }}">Protein</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('fat') }}">Fat</a></li>
                        @yield('contact_bar')
                    </ul>
                </div>
                <div class="d-block d-md-none">
                    <i class="fa-solid fa-bars fs-1 open_btn" style="cursor: pointer"></i>
                </div>
            </div>
        </div>
        <div class="menu_list d-none d-md-none bg-white p-3 shadow-lg">
            <i class="fa-solid fa-xmark fs-1 text-secondary p-2 rounded cursor-pointer close_btn" style="cursor: pointer;"></i>
            <ul class="list-unstyled gap-5">
                <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Home</a></li>
                <li class="nav-item py-3"><a class="nav-link" href="{{ asset('fruit/vegetables') }}">Fruit and vegetables</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ asset('starchy/food') }}">Starchy food</a></li>
                <li class="nav-item py-3"><a class="nav-link" href="{{ asset('dairy') }}">Dairy</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ asset('protein') }}">Protein</a></li>
                <li class="nav-item py-3"><a class="nav-link" href="{{ asset('fat') }}">Fat</a></li>
            </ul>
        </div>
    </header>
    {{-- header section design end form here --}}

    {{-- main section design start form here --}}
    <main class="mt-5 f">
        @yield('content')
    </main>
    {{-- main section design end form here --}}

    {{-- footer section start from here --}}
    <footer class="mt-5">

        {{-- about form design start from here --}}
        <div class="mt-5 f">
            @yield('aboutUs')
        </div>
        {{-- about form design end from here --}}
        
        {{-- contact form design start from here --}}
        <div class="">
            @yield('contact')
        </div>
        {{-- contact form design end from here --}}

        

        <div class="">
            <div class="d-none d-md-block shadow-sm border p-3">
                <div class="row gap-5 items-center w-100">
                    <div class="col-10 col-md-4">
                        <img src="/img/logo.jpeg" alt="logo" class="w-25">
                        <p>Explore unbiased food reviews and health insights to make informed dietary choices with Food Survey RH.</p>
                        <div>
                            <ul class="d-flex gap-5 justify-content-between w-25 list-unstyled">
                                <li>
                                    <a href="{{ asset('https://www.facebook.com/MdRaihanChowdhuryNo.99/') }}" target="_blank"><i class="fa-brands fa-facebook fs-1"></i></a>
                                </li>
                                <li>
                                    <a href="{{ asset('https://www.linkedin.com/in/md-abdul-kader-702209202/') }}" target="_blank"><i class="fa-brands fa-linkedin fs-1"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-10 col-md-7 d-md-flex justify-content-between">
                        <div>
                            <h1 class="fs-3 text-secondary">Service</h1>
                            <ul class="list-unstyled">
                                <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ asset('fruit/vegetables') }}">Fruit and vegetables</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ asset('starchy/food') }}">Starchy food</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ asset('dairy') }}">Dairy</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ asset('protein') }}">Protein</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ asset('fat') }}">Fat</a></li>
                            </ul>
                        </div>
                        <div>
                            <h1 class="fs-3 text-secondary">Support</h1>
                            <ul class="list-unstyled">
                                <li class="nav-item"><a class="nav-link" href="{{ asset('#aboutUs') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ asset('#contact_form') }}">Contact</a></li>
                            </ul>
                        </div>
                        <div>
                            <h1 class="fs-3 text-secondary">Privacy Policy</h1>
                            <ul class="list-unstyled">
                                <li class="nav-item text-primary"><a href="/privacy/policy" class="nav-link">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-2">
                <div>
                    <p>&copy;Copyright 2024</p>
                </div>
            </div>
            <div class="d-block d-md-none text-center px-3 my-5">
                <ul class="list-unstyled gap-5 border py-3">
                    <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Home</a></li>
                    <li class="nav-item py-3"><a class="nav-link" href="{{ asset('fruit/vegetables') }}">Fruit and vegetables</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('starchy/food') }}">Starchy food</a></li>
                    <li class="nav-item py-3"><a class="nav-link" href="{{ asset('dairy') }}">Dairy</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('protein') }}">Protein</a></li>
                    <li class="nav-item py-3"><a class="nav-link" href="{{ asset('fat') }}">Fat</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('#aboutUs') }}">About Us</a></li>
                    <li class="nav-item py-3"><a class="nav-link" href="{{ asset('#contact_form') }}">Contact</a></li>
                    <li class="nav-item text-primary"><a href="privacy/policy" class="nav-link">Privacy Policy</a></li>
                    <div class="mt-5">
                        <ul class="d-flex justify-content-between w-25 mx-auto list-unstyled">
                            <li>
                                <a href="{{ asset('https://www.facebook.com/MdRaihanChowdhuryNo.99/') }}" target="_blank"><i class="fa-brands fa-facebook fs-1"></i></a>
                            </li>
                            <li>
                                <a href="{{ asset('https://www.linkedin.com/in/md-abdul-kader-702209202/') }}" target="_blank"><i class="fa-brands fa-linkedin fs-1"></i></a>
                            </li>
                        </ul>
                    </div>
                    <p class="text-center mt-5">Copyright &copy; 2024</p>
                </ul>
            </div>
        </div>
    </footer>
    {{-- footer section end from here --}}
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- javascript file linked up --}}
    <script src="{{ asset('script.js') }}"></script>
  </body>
</html>