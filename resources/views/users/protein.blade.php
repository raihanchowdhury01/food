@extends('users.master')
@section('title')
Top Protein Foods for a Healthier Lifestyle | Ultimate Guide to High-Protein Diets
@endsection
@section('meta')
<meta name="description" content="Explore the best protein-rich foods to fuel your body and boost your health. From lean meats to plant-based proteins, discover the benefits, recipes, and tips for a balanced high-protein diet. Perfect for fitness enthusiasts, weight loss, and muscle building.">
<meta name="keywords" content="protein-rich foods UK, protein health benefits USA, best protein sources Europe, protein diet tips, high protein recipes UK, protein nutrition USA, buy protein foods online Europe, protein for muscle growth, plant-based protein sources UK, protein meal ideas USA, protein-rich foods, high-protein diet, best protein foods, lean meats, plant-based protein, muscle building protein, protein for weight loss, healthy protein sources, protein food benefits, protein recipes, protein diet tips, protein food guide, protein for fitness, top protein foods, balanced protein diet">
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
    <img class="fruitBanner" src="/img/protein.gif" alt="">
</div>

<div class="category_body_color">
    @if ($items->isNotEmpty())
        <div class="container row mx-auto mt-5">
            @foreach ($items as $item)
                @if ($item->Category === 'Protein')
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