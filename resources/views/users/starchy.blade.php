@extends('users.master')
@section('title')
Top Starchy Foods: Health Benefits, Nutrition Facts, & Recipes | Your Guide to Healthy Eating
@endsection
@section('meta')
<meta name="description" content="Explore the best starchy foods with our comprehensive guide. Discover the health benefits, nutritional value, and delicious recipes featuring potatoes, bread, rice, and more. Optimize your diet with these essential carbohydrates.">
<meta name="keywords" content="Starchy foods UK, Best starchy food recipes USA, Nutritional facts starchy foods Europe, Whole grains benefits UK, Starchy food diet plan USA, Healthy starchy foods Europe, Potatoes health benefits UK, Starchy foods for weight loss USA, Starchy vegetables Europe, Starchy foods list UK">
@endsection

@section('content')
@if ($items->isNotEmpty())
@foreach ($items as $item)
@if ($item->Category === 'Starchy food')
            @section('title')
                {{$item->mTitle}}
            @endsection
            @section('key')
            <meta name="keywords" content="{{$item->Keyword}}">
            <meta name="description" content="{{$item->Desc}}">
            @endsection
            <div class="w-75 mx-auto">
                <div class="mt-5 w-50 mx-auto">
                    <img class="smd_width" style="border-radius: 100%" src="{{ url('Uploaded_Photo/'. $item->Image) }}" alt="This is a pizza">
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