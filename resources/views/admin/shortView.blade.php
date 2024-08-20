@extends('admin.master')
@section('title')
    Short item view page
@endsection

@section('content')
  {{-- search bar section design start from here --}}
  <form action="{{ route('searchItem') }}" method="GET">
    @csrf

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="input-group">
            <input type="search" name="search" class="form-control" placeholder="Search...">
            <div class="input-group-append">
              <input type="submit" value="Search" class="btn btn-primary">
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  {{-- search bar section design end from here --}}

  <div class="container">
    <div class="row">
      @if ($items->isNotEmpty())
      @foreach ($items as $item)
        <div class="mt-5 col-6 col-sm-4 col-md-2 col-lg-2">
          <img class="md_width" style="border-radius: 100%" src="{{ url('Uploaded_Photo/'. $item->Image) }}" alt="This is a pizza">
          <p class="text-center text-capitalize name_width">{{$item->Name}}</p>
          @if ($item->Category === 'Fruit and vegetables')
              <p class="text-center">({{$item->Category}})</p>
          @endif
          @if ($item->Category === 'Starchy food')
              <p class="text-center">({{$item->Category}})</p>
          @endif
          @if ($item->Category === 'Dairy')
              <p class="text-center">({{$item->Category}})</p>
          @endif
          @if ($item->Category === 'Protein')
              <p class="text-center">({{$item->Category}})</p>
          @endif
          @if ($item->Category === 'Fat')
              <p class="text-center">({{$item->Category}})</p>
          @endif
          <a href="{{ url('view', $item->id) }}" class="btn btn-primary text-center ms-5">See Details</a>
          <a href="{{ url('edit', $item->id) }}" class="btn btn-warning text-center ms-5">Edit Details</a>
          <a href="{{ url('delete', $item->id) }}" class="btn btn-danger text-center ms-5">Delete</a>
        </div>
        @endforeach
      <div class="mt-5 py-5 text-center">
        {{$items->links()}}
      </div>
      @endif
    </div>
  </div>
@endsection