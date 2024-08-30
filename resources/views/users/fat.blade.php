@extends('users.master')
@section('title')
Healthy Fats: The Ultimate Guide to Nutrient-Rich Fat Foods for a Balanced Diet
@endsection
@section('meta')
<meta name="description" content="Discover the essential role of healthy fats in your diet with our comprehensive guide. Explore nutrient-rich fat foods that boost energy, support brain health, and promote overall well-being. Learn how to incorporate these fats into your daily meals for optimal health.">
<meta name="keywords" content="Fat foods, health benefits of fats, best fat-rich foods, fat food recipes, healthy fats UK, top fat foods USA, European fat food tips, fat foods for weight loss, dietary fats, healthy fat sources, fat food benefits, fat-rich diet UK USA Europe, healthy fats, fat foods, nutrient-rich fats, balanced diet, good fats, healthy fat sources, dietary fats, fat food benefits, brain health fats, energy-boosting fats, heart-healthy fats, omega-3 rich foods, unsaturated fats, fat food guide, fat nutrition facts">

@section('content')
<div class="container">
    <img class="fruitBanner" src="/img/fat.gif" alt="">
</div>

<div class="category_body_color">
    @if ($items->isNotEmpty())
        <div class="container row mx-auto mt-5">
            @foreach ($items as $item)
                @if ($item->Category === 'Fat')
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