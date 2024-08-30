@extends('users.master')
@section('title')
Top Starchy Foods: Health Benefits, Nutrition Facts, & Recipes | Your Guide to Healthy Eating
@endsection
@section('meta')
<meta name="description" content="Explore the best starchy foods with our comprehensive guide. Discover the health benefits, nutritional value, and delicious recipes featuring potatoes, bread, rice, and more. Optimize your diet with these essential carbohydrates.">
<meta name="keywords" content="Starchy foods UK, Best starchy food recipes USA, Nutritional facts starchy foods Europe, Whole grains benefits UK, Starchy food diet plan USA, Healthy starchy foods Europe, Potatoes health benefits UK, Starchy foods for weight loss USA, Starchy vegetables Europe, Starchy foods list UK">
@endsection

@section('content')
<div class="container">
    <img class="fruitBanner" src="/img/starchy.gif" alt="">
</div>

<div class="category_body_color">
    @if ($items->isNotEmpty())
        <div class="container row mx-auto mt-5">
            @foreach ($items as $item)
                @if ($item->Category === 'Starchy food')
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