<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logo.jpeg') }}" type="image/x-icon">
    @yield('meta')
    <meta name="author" content="Raihan Chowdhury">
    <title>@yield('title')</title>
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

    {{-- footer section start from here --}}
    <footer class="my-5">

        {{-- about form design start from here --}}
        <section class="about-us text-center" id="aboutUs">
            <div class="container">
                <h1 class="title">About Us</h1>
                <p class="description">
                    Welcome to Food Survey RH, your go-to source for detailed reviews and information on a variety of foods. Our mission is to provide you with insightful and reliable content to help you make informed choices about your diet. Our team of passionate food enthusiasts is dedicated to bringing you the latest trends, health benefits, and delicious recipes that cater to your needs.
                </p>
                <div class="row">
                    <div class="col-lg-4 team-member">
                        {{-- <img src="https://via.placeholder.com/120" alt="Team Member 1"> --}}
                        <h4>MD Raihan Chowdhury</h4>
                        <p>Founder & CEO</p>
                    </div>
                    <div class="col-lg-4 team-member">
                        {{-- <img src="https://via.placeholder.com/120" alt="Team Member 2"> --}}
                        <h4>MD Raihan Hossan</h4>
                        <p>Head Chef & Nutritionist</p>
                    </div>
                    <div class="col-lg-4 team-member">
                        {{-- <img src="https://via.placeholder.com/120" alt="Team Member 3"> --}}
                        <h4>MD Raihan Chowdhury</h4>
                        <p>Food Critic & Blogger</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- about form design end from here --}}
        <hr class="w-75 mx-auto">
        
        {{-- contact form design start from here --}}
        <section id="contact_form" class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <h2 class="display-4 text-center">Get in Touch</h2>
                        <p class="text-center lead">We'd love to hear from you! Whether you have a question, feedback, or just want to say hi, feel free to reach out to us.</p>
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title">Contact Information</h4>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="bi bi-person-circle me-2"></i><strong>Name:</strong> MD Raihan Chowdhury
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-telephone me-2"></i><strong>Phone:</strong> +8801965240019
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-envelope me-2"></i><strong>Email:</strong> <span>raihan24969@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- contact form design end from here --}}
        <div class="mt-5">
            <div class="d-none d-md-block">
                <ul class="gap-2 d-flex justify-content-between list-unstyled px-2 footerMenu mx-sm-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('fruit/vegetables') }}">Fruit and vegetables</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('starchy/food') }}">Starchy food</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('dairy') }}">Dairy</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('protein') }}">Protein</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('fat') }}">Fat</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('#aboutUs') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('#contact_form') }}">Contact</a></li>
                    <li class="nav-item text-primary"><a href="/privacy/policy" class="nav-link">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="d-block d-md-none text-center px-3 my-5">
                <ul class="list-unstyled gap-5 border py-3">
                    <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Home</a></li>
                    <li class="nav-item py-3"><a class="nav-link" href="{{ asset('fruit/vegetables') }}">Fruit and vegetables</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('starchy/food') }}">Starchy food</a></li>
                    <li class="nav-item py-3"><a class="nav-link" href="{{ asset('dairy') }}">Dairy</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('protein') }}">Protein</a></li>
                    <li class="nav-item pt-3"><a class="nav-link" href="{{ asset('fat') }}">Fat</a></li>
                    <li class="nav-item pt-3"><a class="nav-link" href="{{ asset('#aboutUs') }}">About Us</a></li>
                    <li class="nav-item pt-3"><a class="nav-link" href="{{ asset('#contact_form') }}">Contact</a></li>
                    <li class="nav-item text-primary"><a href="privacy/policy" class="nav-link">Privacy Policy</a></li>
                </ul>
            </div>
            {{-- <div>
                <ul class="d-flex justify-content-between w-25 mx-auto list-unstyled">
                    <li>
                        <a href="{{ asset('') }}"><i class="fa-brands fa-facebook fs-1"></i></a>
                    </li>
                    <li>   
                        <a href="{{ asset('') }}"><i class="fa-brands fa-twitter fs-1"></i></a>
                    </li>
                    <li>
                        <a href="{{ asset('') }}"><i class="fa-brands fa-linkedin fs-1"></i></a>
                    </li>
                </ul>
            </div> --}}
            <p class="text-center mt-5">Made by foodsurveyrh.com author. Copyright &copy; 2024</p>
        </div>
    </footer>
    {{-- footer section end from here --}}
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- javascript file linked up --}}
    <script src="{{ asset('script.js') }}"></script>
  </body>
</html>