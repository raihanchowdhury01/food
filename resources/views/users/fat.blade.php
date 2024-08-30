@extends('users.master')
@section('title')
Healthy Fats: The Ultimate Guide to Nutrient-Rich Fat Foods for a Balanced Diet
@endsection
@section('meta')
<meta name="description" content="Discover the essential role of healthy fats in your diet with our comprehensive guide. Explore nutrient-rich fat foods that boost energy, support brain health, and promote overall well-being. Learn how to incorporate these fats into your daily meals for optimal health.">
<meta name="keywords" content="Fat foods, health benefits of fats, best fat-rich foods, fat food recipes, healthy fats UK, top fat foods USA, European fat food tips, fat foods for weight loss, dietary fats, healthy fat sources, fat food benefits, fat-rich diet UK USA Europe, healthy fats, fat foods, nutrient-rich fats, balanced diet, good fats, healthy fat sources, dietary fats, fat food benefits, brain health fats, energy-boosting fats, heart-healthy fats, omega-3 rich foods, unsaturated fats, fat food guide, fat nutrition facts">

@section('content')
    @if ($items->isNotEmpty())
        @foreach ($items as $item)
            @if ($item->Category === 'Fat')
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
        @endforeach
            <div class="mt-5 py-5 text-center">
                {{$items->links()}}
            </div>
    @endif
@endsection