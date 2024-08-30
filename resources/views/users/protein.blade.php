@extends('users.master')
@section('title')
Top Protein Foods for a Healthier Lifestyle | Ultimate Guide to High-Protein Diets
@endsection
@section('meta')
<meta name="description" content="Explore the best protein-rich foods to fuel your body and boost your health. From lean meats to plant-based proteins, discover the benefits, recipes, and tips for a balanced high-protein diet. Perfect for fitness enthusiasts, weight loss, and muscle building.">
<meta name="keywords" content="protein-rich foods UK, protein health benefits USA, best protein sources Europe, protein diet tips, high protein recipes UK, protein nutrition USA, buy protein foods online Europe, protein for muscle growth, plant-based protein sources UK, protein meal ideas USA, protein-rich foods, high-protein diet, best protein foods, lean meats, plant-based protein, muscle building protein, protein for weight loss, healthy protein sources, protein food benefits, protein recipes, protein diet tips, protein food guide, protein for fitness, top protein foods, balanced protein diet">
@endsection
@section('content')
<div class="container">
    <img class="fruitBanner" src="/img/protein.gif" alt="">
</div>

<div class="category_body_color">
    @if ($items->isNotEmpty())
        <div class="container row mx-auto mt-5">
            @foreach ($items as $item)
                @if ($item->Category === 'Protein')
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