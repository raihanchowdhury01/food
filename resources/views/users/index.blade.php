@extends('users.master')
@section('title')
  Food Insights & Trends | Explore Our Latest Food Survey review Blog
@endsection
@section('key')
<meta name="keywords" content="food reviews, healthy food choices, food blogger, food analysis, food benefits, food risks, honest food reviews, healthy eating, food guide, food facts">
<meta name="description" content="Uncover the truth behind your favorite foods. Our honest reviews and in-depth analysis help you make healthier choices. Explore the good and bad sides of food with expert insights on our food review blog.">
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
{{-- <div class="mt-5">
  <h1 class="text-center text-capitalize fs-1">Our Product</h1>
</div>
@if ($items->isNotEmpty())
    <div class="container d-md-flex gap-0 mx-auto mt-5">
      @foreach ($items as $item) --}}
        {{-- product service card section design start from here --}}
        {{-- <div class="container">
          <div class="position-relative card_shadow rounded">
            <img class="w-100 rounded card_shadow" src="{{ url('Uploaded_Photo/'. $item->Image) }}" alt="test pic">
            <div class="container position-absolute bottom-0 text-white text-capitalize mb-3 fs-3">
              <p>{{$item->Name}}</p>
              <p class="fs-5 fw-bold">{{ $item->created_at->format('F j, Y g:i A') }}</p>
            </div>
          </div>
        </div> --}}
        {{-- product service card section design end from here --}}
      {{-- @endforeach
    </div>
    <div class="mt-5 py-5 text-center">
      {{$items->links()}}
    </div>
@endif --}}
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