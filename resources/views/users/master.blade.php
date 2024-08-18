<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logo.jpeg') }}" type="image/x-icon">
    <meta name="keywords" content="food review, health tips">
    <meta name="description" content="Food category review || This review help to you for choose the best healthy food item">
    <meta name="author" content="Raihan Chowdhury">
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
        <div style="font-family: Sans-serif ;background-color:rgb(248,249,250);padding:18px;color:black" id="aboutUs"><br>
            <h2 style="font-family: Sans-serif ;color:black; text-align: center">About Us !</h2>
            <h2 style="font-family: Sans-serif ;text-align: center;">Welcome To <span id="W_Name1" >Food review and health tips</span></h2>
            <p><span id="W_Name2">Food review and health tips</span> is a Professional <span id="W_Type1">Food review</span> Platform. Here we will only provide you with interesting content that you will enjoy very much. We are committed to providing you the best of <span id="W_Type2">Food review</span>, with a focus on reliability and <span id="W_Spec">food review</span>. we strive to turn our passion for <span id="W_Type3">Food review</span> into a thriving website. We hope you enjoy our <span id="W_Type4">Food review</span> as much as we enjoy giving them to you.</p>
            <p>I will keep on posting such valuable anf knowledgeable information on my Website for all of you. Your love and support matters a lot.</p>
            <p style="font-weight: bold; text-align: center;">Thank you For Visiting Our Site<br><br>
            <span style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">Have a great day !</span></p>
        </div><br><br>
        {{-- about form design end from here --}}
        <hr class="w-75 mx-auto">
        
        {{-- contact form design start from here --}}
        <div id="contact_form">
            {{-- contact section design start from here --}}
            
            <h1 class="text-center">Contact Us !</h1>
            <h2 style="text-align: center;">Welcome to <span>foodsurveyrh.com</span> !</h2>
            <p style="font-size: 17px;" class="text-center">Please email us if you have any queries about the site, advertising, or anything else.</p>

            <div style="text-align: center;">

            <img alt="contact-us" style="width: 200px; border-radius: 100%" src="img/email.jpeg">

            <p><i class="fas fa-envelope-open-text" style="color: #2c3e50; font-size: 20px;"></i> <b><i> <span id="W_Email"><a href="mailto:raihan24969@gmail.com">raihan24969@gmail.com</a></span></i></b><br>
            <h3 style="color: #3e005d;">We will revert you as soon as possible...!</h3>
            <p style="color: #3e005d; text-align: center;">Thank you for contacting us! <br><b>Have a great day</b></p>
            </div>
        
            {{-- contact section design end from here --}}
        </div>
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