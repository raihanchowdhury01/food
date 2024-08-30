@extends('users.master')
@section('title')
Fresh & Organic Fruits and Vegetables - Boost Your Health with Nature's Best
@endsection
@section('meta')
<meta name="description" content="Explore our diverse collection of fresh, organic fruits and vegetables. Learn about their health benefits, nutrition facts, and find delicious recipes to incorporate them into your diet. Shop now to embrace a healthier lifestyle with nature’s finest produce!">
<meta name="keywords" content="fresh fruits and vegetables, organic produce UK, buy fruits online USA, best vegetable recipes Europe, healthy eating tips, fruit and veg delivery UK, seasonal produce USA, nutrition facts vegetables, European organic farms, fresh fruit suppliers">
@endsection
@section('content')
<div class="container">
    <img class="fruitBanner" src="/img/fruit&veggies.gif" alt="">
</div>

<div class="category_body_color">
    @if ($items->isNotEmpty())
        <div class="container row mx-auto mt-5">
            @foreach ($items as $item)
                @if ($item->Category === 'Fruit and vegetables')
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