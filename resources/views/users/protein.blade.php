@extends('users.master')
@section('title')
Top Protein Foods for a Healthier Lifestyle | Ultimate Guide to High-Protein Diets
@endsection
@section('meta')
<meta name="description" content="Explore the best protein-rich foods to fuel your body and boost your health. From lean meats to plant-based proteins, discover the benefits, recipes, and tips for a balanced high-protein diet. Perfect for fitness enthusiasts, weight loss, and muscle building.">
<meta name="keywords" content="protein-rich foods UK, protein health benefits USA, best protein sources Europe, protein diet tips, high protein recipes UK, protein nutrition USA, buy protein foods online Europe, protein for muscle growth, plant-based protein sources UK, protein meal ideas USA, protein-rich foods, high-protein diet, best protein foods, lean meats, plant-based protein, muscle building protein, protein for weight loss, healthy protein sources, protein food benefits, protein recipes, protein diet tips, protein food guide, protein for fitness, top protein foods, balanced protein diet">
@endsection
@section('content')
    @if ($items->isNotEmpty())
        @foreach ($items as $item)
            @if ($item->Category === 'Protein')
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