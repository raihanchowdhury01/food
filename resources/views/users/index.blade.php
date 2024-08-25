@extends('users.master')
@section('title')
    Home~Page || food category review || This review help to you for choose the best healthy food item
@endsection

@section('content')
  {{-- search bar section design start from here --}}
  {{-- <form action="{{ route('searchItem') }}" method="GET">
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
  </form> --}}
  {{-- search bar section design end from here --}}
  <div class="container mt-5" style="width: 80%">
    <div class="row">
        <div class="col-12 col-md-6">
            <!-- Card 1 -->
            <div class="d-flex gap-5 bg-white shadow-lg rounded p-2 mb-4">
                <img src="img/logo.jpeg" alt="" style="width: 20%">
                <div>
                    <h5>Health Management Plan: A Comprehensive Guide</h5>
                    <p>If you want to control your healt. Click on "see more"</p>
                    <a href="{{ route('health') }}" class="text-decoration-none">See More</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <!-- Card 2 -->
            <div class="d-flex gap-5 bg-white shadow-lg rounded p-2 mb-4">
                <img src="img/logo.jpeg" alt="" style="width: 20%">
                <div>
                    <h5>Diet Control Plan: A Guide for Healthy Living</h5>
                    <p>If you want to control your diet. Click on "see more"</p>
                    <a href="{{ route('diet') }}" class="text-decoration-none">See More</a>
                </div>
            </div>
            
            <!-- Card 3 (in the second column) -->
          </div>
          <div class="d-flex gap-5 bg-white shadow-lg rounded p-2 col-12 col-md-6">
              <img src="img/logo.jpeg" alt="" style="width: 20%">
              <div>
                  <h5>Fitness Control Plan: A Comprehensive Guide</h5>
                  <p>If you want to control your fitness. Click on "see more"</p>
                  <a href="{{ route('fitness') }}" class="text-decoration-none">See More</a>
              </div>
          </div>
    </div>
</div>
@endsection