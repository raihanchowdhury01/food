@extends('users.master')
@section('title')
  Food Insights & Trends | Explore Our Latest Food Survey review Blog
@endsection
@section('key')
<meta name="keywords" content="food reviews, healthy food choices, food blogger, food analysis, food benefits, food risks, honest food reviews, healthy eating, food guide, food facts">
<meta name="description" content="Uncover the truth behind your favorite foods. Our honest reviews and in-depth analysis help you make healthier choices. Explore the good and bad sides of food with expert insights on our food review blog.">
@endsection
@section('contact_bar')
<button class="btn btn-warning text-white"><a class="nav-link" href="{{ asset('#contact_form') }}">Contact</a></button>
@endsection
@section('content')
{{-- banner section design start from here --}}
<div class="container">
  <div class="row gap-5">
    <div class="col-lg-6">
      <div>
        <div>
          <h1>Your Ultimate Guide to Healthy Eating and Tasty Treats</h1>
          <p class="text-secondary">Welcome to food survey rh, where every bite tells a story of flavor and wellness. Dive into a world of delicious, healthy choices crafted with care and passion. Whether you’re seeking the freshest produce, savory meals, or nutritional insights, we’ve got you covered. Our expert reviews and curated recipes ensure that you can enjoy the best of what nature has to offer, all while making informed decisions for a healthier lifestyle. Join us on a culinary journey where taste meets nutrition, and discover how the right food can transform your life. Start exploring today, and let’s make every meal a celebration of health and happiness!</p>
          <button class="btn btn-warning text-white mt-3 fs-5">
            <a class="nav-link" href="{{ asset('#contact_form') }}">Contact Us</a>
          </button>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div>
        <svg width="300" height="300" class="svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
          <!-- Background circle -->
          <circle cx="100" cy="100" r="95" fill="white" stroke="#e0e0e0" stroke-width="2"/>
  
          <!-- Noodles Bowl -->
          <ellipse cx="100" cy="150" rx="60" ry="20" fill="#f8b400" />
          <path d="M40,150 Q100,120 160,150" fill="#f8b400" />
          <ellipse cx="100" cy="150" rx="55" ry="15" fill="#f3e5ab" />
  
          <!-- Noodles -->
          <path d="M70,120 Q75,125 80,120 T90,120 T100,120 T110,120 T120,120 T130,120" stroke="#eab543" stroke-width="3" fill="none" />
          <path d="M75,125 Q80,130 85,125 T95,125 T105,125 T115,125 T125,125" stroke="#eab543" stroke-width="3" fill="none" />
          
          <!-- Chopsticks -->
          <line x1="60" y1="50" x2="140" y2="120" stroke="#8e8e8e" stroke-width="8"/>
          <line x1="65" y1="45" x2="145" y2="115" stroke="#c4c4c4" stroke-width="5"/>
          
          <!-- Decorative Elements -->
          <circle cx="30" cy="30" r="10" fill="#f8b400" />
          <circle cx="170" cy="30" r="10" fill="#f8b400" />
          <circle cx="30" cy="170" r="10" fill="#f8b400" />
          <circle cx="170" cy="170" r="10" fill="#f8b400" />
      </svg>
      </div>
    </div>
  </div>
</div>

{{-- banner section design end from here --}}

{{-- product service section design start from here --}}
<div class="service">
  <div class="mt-5">
    <h1 class="text-center text-capitalize fs-1">Our Product</h1>
  </div>
  @if ($items->isNotEmpty())
      <div class="container d-md-flex gap-0 mx-auto mt-3">
        @foreach ($items as $item)
          {{-- product service card section design start from here --}}
          <div class="container my-5">
            <div class="position-relative card_shadow rounded">
              <a href="{{ url('view', $item->id) }}" class="nav-link"><img class="w-100 rounded card_shadow" src="{{ url('Uploaded_Photo/'. $item->Image) }}" alt="test pic"></a>
              <div class="container position-absolute bottom-0 text-white text-capitalize mb-3 fs-3">
                <p>{{$item->Name}}</p>
                <p class="fs-5 fw-bold">{{ $item->created_at->format('F j, Y g:i A') }}</p>
              </div>
            </div>
          </div>
          {{-- product service card section design end from here --}}
        @endforeach
      </div>
      <div class="my-5 mb-5 text-center">
        {{$items->links()}}
      </div>
  @endif
</div>
{{-- prodcut service section design end from here --}}
  {{-- service card section design start form here --}}
  <div class="container mt-5 mb-5">
    <div class="my-5">
      <h1 class="text-center">Our Service</h1>
    </div>
    <div class="d-md-flex gap-5">
        <div class="hoverEffect d-md-flex gap-3 border p-3 align-items-center rounded">
            <img class="health_pic img-fluid" src="img/health.jpeg" alt="health">
            <div>
                <h3>Health Tips</h3>
                <p>Top 10 Life-Changing Health Tips: Boost Your Well-Being and Transform Your Daily Routine Today!</p>
                <a href="{{ route('health') }}" class="text-decoration-none">Learn More</a>
            </div>
        </div>
        <div class="hoverEffect d-md-flex gap-3 border p-3 align-items-center rounded my-5 my-md-0">
            <img class="health_pic img-fluid" src="img/health.jpeg" alt="health">
            <div>
                <h3>Diet Tips</h3>
                <p>Transform Your Health: 10 Simple Diet Tips for a Slimmer, Stronger, and Happier You!</p>
                <a href="{{ route('diet') }}" class="text-decoration-none">Learn More</a>
            </div>
        </div>
        <div class="hoverEffect d-md-flex gap-3 border p-3 align-items-center rounded">
            <img class="health_pic img-fluid" src="img/health.jpeg" alt="health">
            <div>
                <h3>Fitness Tips</h3>
                <p>Transform Your Body: Discover Expert Fitness Tips for Achieving Peak Health and Energy in Just Weeks!</p>
                <a href="{{ route('fitness') }}" class="text-decoration-none">Learn More</a>
            </div>
        </div>
    </div>
</div>

  {{-- service card section design end form here --}}
@endsection

@section('aboutUs')
    {{-- about form design start from here --}}
    <div class="container">
      <section class="about-us" id="aboutUs">
          <div class="container">
              <h1 class="title text-center">About Us</h1>
              <hr class="w-25 mx-auto"/>
              <div class="container mx-auto row gap-5">
                <div class="col-12 col-md-7">
                  <div class="description">
                    <h1 class="fs-3">About Food Survey RH: Your Trusted Guide to Healthy and Informed Food Choices</h1>
                    <div class="my-5">
                      <p>At Food Survey RH, we are dedicated to providing in-depth reviews, insights, and expert advice on the healthiest food options. Our mission is to empower you with the knowledge to make informed decisions about what you eat. Discover the good and bad sides of food items with our comprehensive analyses, all crafted to support your journey to a healthier lifestyle.</p>
                    </div>
                    <ul class="list-unstyled">
                      <li class="d-flex items-center gap-2"><i class="fa-solid fa-check text-success"></i><h1 class="fs-5">Expert Food Reviews:<span class="fw-normal fs-6"> Unbiased evaluations of various food categories to help you choose what's best for your health.</span></h1></li>
                      <li class="d-flex items-center gap-2"><i class="fa-solid fa-check text-success"></i><h1 class="fs-5">Health-Focused Content:<span class="fw-normal fs-6"> Articles and guides aimed at enhancing your well-being through smarter food choices.</span></h1></li>
                      <li class="d-flex items-center gap-2"><i class="fa-solid fa-check text-success"></i><h1 class="fs-5"> Global Perspective:<span class="fw-normal fs-6"> Catering to a diverse audience in the UK, USA, and Europe with localized food recommendations.</span></h1></li>
                      <li class="d-flex items-center gap-2"><i class="fa-solid fa-check text-success"></i><h1 class="fs-5"> User-Centric Approach:<span class="fw-normal fs-6"> Tailored advice and tips based on the latest nutritional research and trends.</span></h1></li>
                      <li class="d-flex items-center gap-2"><i class="fa-solid fa-check text-success"></i><h1 class="fs-5"> Transparency & Trust:<span class="fw-normal fs-6"> We are committed to providing honest reviews and transparent information to help you navigate the complexities of modern food choices.</span></h1></li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <img src="/img/me.jpg" alt="hero" class="img-fluid w-100">
                </div>
              </div>
          </div>
      </section>
  </div>
  {{-- about form design end from here --}}
@endsection

{{-- contact section design start from here --}}
@section('contact')
<section id="contact_form" class="bg-light py-5">
  <div class="container">
      <div class="">
          <h2 class="display-4 text-center">Get in Touch</h2>
          <p class="text-center lead">We'd love to hear from you! Whether you have a question, feedback, or just want to say hi, feel free to reach out to us.</p>
      </div>
      <div class="row">
          <div class="col-lg-6">
              <div class="card shadow-sm mt-5 contacts">
                  <div class="card-body">
                      <h4 class="card-title text-center">Contact Information</h4>
                      <form action="">
                          @csrf
                          <label for="name">Enter your name</label><br>
                          <input type="text" name="name" class="form-control form-control-lg">
                          <label for="email" class="mt-3">Enter your email</label><br>
                          <input type="email" name="email" class="form-control form-control-lg mb-3">
                          <label for="message">Enter your message</label><br>
                          <textarea name="message" cols="30" rows="5" class="form-control form-control-lg"></textarea><br>
                          <button class="btn btn-warning" type="submit">Message</button>
                      </form>
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="card shadow-sm mt-5">
                  <img class="img-fluid" src="/img/location.jpg" alt="location">
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
{{-- contact section design end from here --}}