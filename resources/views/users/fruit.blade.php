@extends('users.master')
@section('title')
Fresh & Organic Fruits and Vegetables - Boost Your Health with Nature's Best
@endsection
@section('meta')
<meta name="description" content="Explore our diverse collection of fresh, organic fruits and vegetables. Learn about their health benefits, nutrition facts, and find delicious recipes to incorporate them into your diet. Shop now to embrace a healthier lifestyle with nature’s finest produce!">
<meta name="keywords" content="fresh fruits and vegetables, organic produce UK, buy fruits online USA, best vegetable recipes Europe, healthy eating tips, fruit and veg delivery UK, seasonal produce USA, nutrition facts vegetables, European organic farms, fresh fruit suppliers">
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
    <img class="fruitBanner" src="/img/fruit&veggies.gif" alt="">
</div>

<div class="category_body_color">
    @if ($items->isNotEmpty())
        <div class="container row mx-auto mt-5">
            @foreach ($items as $item)
                @if ($item->Category === 'Fruit and vegetables')
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