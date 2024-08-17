@extends('users.master')
@section('title')
    Home~Page || food category review || This review help to you for choose the best healthy food item
@endsection

@section('content')
  @if ($items->isNotEmpty())
    @foreach ($items as $item)
      <div class="w-75 mx-auto">
        <div class="mt-5 w-50 mx-auto">
          <img class="md_width" style="border-radius: 100%" src="{{ url('Uploaded_Photo/'. $item->Image) }}" alt="This is a pizza">
          <p class="text-center text-capitalize name_width">{{$item->Name}}</p>
        </div>
        <div class="mt-5">
          {{-- title --}}
          <div>
            <h1>{{$item->Title}}</h1>
          </div>
          {{-- Components description --}}
          <div class="mt-5">
            <p class="text-capitalize py-3 fs-4">Components of this food:</p>
          </div>
          <div>
            <ul>
              @foreach(explode('||', $item->componentDescription) as $line)
                <li>{{ $line }}</li>
              @endforeach
            </ul>
          </div>
          {{-- Positive description --}}
          <div class="mt-5">
            <p class="text-capitalize py-3 fs-4">Positive Side of this food:</p>
          </div>
          <div>
            <p>{{ $item->positiveDescription }}</p>
          </div>
        
          {{-- Negative description --}}
          <div class="mt-5">
            <p class="text-capitalize py-3 fs-4">Negative side of this food:</p>
          </div>
          <div>
            <p>{{ $item->negativeDescription }}</p>
          </div>
        </div>
      </div>
    @endforeach
  @endif
@endsection