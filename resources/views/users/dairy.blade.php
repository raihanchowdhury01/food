@extends('users.master')
@section('title')
Discover the Health Benefits & Varieties of Dairy Foods - Ultimate Guide
@endsection
@section('meta')
<meta name="description" content="Explore our comprehensive guide to dairy foods, uncovering the health benefits, nutritional value, and best dairy products to include in your diet. From cheese to yogurt, learn how to make healthier choices and discover the top dairy suppliers near you. Perfect for those seeking to improve their diet with quality dairy products.">
<meta name="keywords" content="Dairy food benefits, Dairy nutrition facts, Best dairy products, Cheese varieties, Yogurt health benefits, Dairy suppliers, Healthy dairy choices, Dairy diet tips, Milk nutrition, Dairy products for weight loss, Dairy foods health benefits, Nutritional insights dairy, Dairy recipes UK, Cheese nutrition USA, Best yogurt brands Europe, Organic dairy products, Milk health benefits, Dairy superfoods, Healthy dairy snacks, Dairy diet tips, Low-fat dairy options, Dairy farming practices, Dairy food guide UK, Cheese varieties USA, Yogurt nutrition Europe">
@endsection

@section('contact_bar')
<button class="btn btn-warning" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Contact</button>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Contact Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                @csrf
                <label for="name">Enter your name</label><br>
                <input type="text" name="name" class="form-control form-control-lg">
                <label for="email" class="mt-3">Enter your email</label><br>
                <input type="email" name="email" class="form-control form-control-lg mb-3">
                <label for="message">Enter your message</label><br>
                <textarea name="message" cols="30" rows="5" class="form-control form-control-lg"></textarea><br>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning">Send message</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<div class="container">
    <img class="fruitBanner" src="/img/dairy.gif" alt="">
</div>

<div class="category_body_color">
    @if ($items->isNotEmpty())
        <div class="container row mx-auto mt-5">
            @foreach ($items as $item)
                @if ($item->Category === 'Dairy')
                <div class="container col-6 col-md-3 my-1 bg-white p-3 rounded">
                    <div class="rounded">
                        <a href="{{ url('view', $item->id) }}" class="nav-link"><img class="w-100 rounded" src="{{ url('Uploaded_Photo/'. $item->Image) }}" alt="{{$item->alt}}"></a>
                        <div class="bottom-0 text-capitalize">
                            <p class="fs-5"><a href="{{ url('view', $item->id) }}" class="nav-link">{{$item->Name}}</a></p>
                            @if (strlen($item->Title) > 50 || strlen($item->Title) < 50)
                                <p>{{ substr($item->Title, 0, 50) }}...</p>
                            @else
                                <p>{{ $item->Title }}</p>
                            @endif
                            <p class="text-secondary">{{ $item->created_at->format('F j, Y g:i A') }}</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        <div class="mt-5 py-5 text-center">
            {{$items->links()}}
        </div>
    @endif
</div>
@endsection