@extends('users.master')
@section('title')
Discover the Health Benefits & Varieties of Dairy Foods - Ultimate Guide
@endsection
@section('meta')
<meta name="description" content="Explore our comprehensive guide to dairy foods, uncovering the health benefits, nutritional value, and best dairy products to include in your diet. From cheese to yogurt, learn how to make healthier choices and discover the top dairy suppliers near you. Perfect for those seeking to improve their diet with quality dairy products.">
<meta name="keywords" content="Dairy food benefits, Dairy nutrition facts, Best dairy products, Cheese varieties, Yogurt health benefits, Dairy suppliers, Healthy dairy choices, Dairy diet tips, Milk nutrition, Dairy products for weight loss, Dairy foods health benefits, Nutritional insights dairy, Dairy recipes UK, Cheese nutrition USA, Best yogurt brands Europe, Organic dairy products, Milk health benefits, Dairy superfoods, Healthy dairy snacks, Dairy diet tips, Low-fat dairy options, Dairy farming practices, Dairy food guide UK, Cheese varieties USA, Yogurt nutrition Europe">
@endsection
@section('content')
    @if ($items->isNotEmpty())
        @foreach ($items as $item)
            @if ($item->Category === 'Dairy')
            <div class="w-75 mx-auto">
                <div class="mt-5 w-50 mx-auto">
                    <img class="smd_width" style="border-radius: 100%" src="{{ url('Uploaded_Photo/'. $item->Image) }}" alt="{{$item->alt}}">
                    <p class="text-center w-75 text-capitalize ps-5">{{$item->Name}}</p>
                </div>
                <div>
                    {{-- title --}}
                    <div>
                        <h1>{{$item->Title}}</h1>
                    </div>
                    {{-- short description --}}
                    <div>
                        @if (strlen($item->positiveDescription) > 500 || strlen($item->positiveDescription) < 500)
                            <p>{{ substr($item->positiveDescription, 0, 500) }}...</p>
                        @else
                            <p>{{ $item->positiveDescription }}</p>
                        @endif
                        <a href="{{ url('view', $item->id) }}" class="btn btn-primary">See Details</a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <div class="mt-5 py-5 text-center">
                {{$items->links()}}
            </div>
            @endif
@endsection