@extends('users.master')
@section('title')
Discover the Health Benefits & Varieties of Dairy Foods - Ultimate Guide
@endsection
@section('meta')
<meta name="description" content="Explore our comprehensive guide to dairy foods, uncovering the health benefits, nutritional value, and best dairy products to include in your diet. From cheese to yogurt, learn how to make healthier choices and discover the top dairy suppliers near you. Perfect for those seeking to improve their diet with quality dairy products.">
<meta name="keywords" content="Dairy food benefits, Dairy nutrition facts, Best dairy products, Cheese varieties, Yogurt health benefits, Dairy suppliers, Healthy dairy choices, Dairy diet tips, Milk nutrition, Dairy products for weight loss, Dairy foods health benefits, Nutritional insights dairy, Dairy recipes UK, Cheese nutrition USA, Best yogurt brands Europe, Organic dairy products, Milk health benefits, Dairy superfoods, Healthy dairy snacks, Dairy diet tips, Low-fat dairy options, Dairy farming practices, Dairy food guide UK, Cheese varieties USA, Yogurt nutrition Europe">
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
                <div class="container col-4 col-sm-3 col-md-3 col-lg-2 my-3 bg-white p-3 rounded">
                    <div class="card_shadow rounded">
                    <img class="w-100 rounded card_shadow" src="{{ url('Uploaded_Photo/'. $item->Image) }}" alt="{{$item->alt}}">
                    <div class="container bottom-0 text-capitalize">
                        <p class="text-secondary">{{ $item->created_at->format('F j, Y g:i A') }}</p>
                        <p class="fs-5"><a href="{{ url('view', $item->id) }}" class="nav-link">{{$item->Name}}</a></p>
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