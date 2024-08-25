@extends('admin.master')
@section('title')
    Home~Page
@endsection

{{-- user info input section design start form here --}}
@section('content')
    <div class="px-5 mb-5 mt-3">
        <form action="{{ route('storePage') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="photo" class="text-capitalize">Enter your food item photo</label><br>
            <input value="{{old('photo')}}" type="file" name="photo" class="form-control form-control-lg"><br>
            @error('photo')
                <p class="text-warning">{{$message}}</p>
            @enderror

            <label for="name" class="text-capitalize">Enter your food item name</label><br>
            <input value="{{old('name')}}" type="text" name="name" class="form-control form-control-lg">
            @error('name')
                <p class="text-warning">{{$message}}</p>
            @enderror
            <br>

            <label for="item">Select your item category: </label><br>
            <select name="item">
                <option value="" disabled selected class="text-secondary">Choose Your Item</option>
                <option value="Fruit and vegetables">Fruit and vegetables</option>
                <option value="Starchy food">Starchy food</option>
                <option value="Dairy">Dairy</option>
                <option value="Protein">Protein</option>
                <option value="Fat">Fat</option>
            </select>
            @error('item')
                <p class="text-warning">{{$message}}</p>
            @enderror
            <br><br>

            <label for="title" class="text-capitalize">Enter your food item title name</label><br>
            <input value="{{old('title')}}" type="text" name="title" class="form-control form-control-lg">
            @error('title')
                <p class="text-warning">{{$message}}</p>
            @enderror
            <br>


            <label for="componentDescription">Enter your food item components description</label><br>
            <textarea name="componentDescription" cols="30" rows="5" class="form-control form-control-lg">{{old('componentDescription')}}</textarea>
            @error('componentDescription')
                <p class="text-warning">{{$message}}</p>
            @enderror
            <br>

            <label for="positiveDescription">Enter your food item positive description</label><br>
            <textarea name="positiveDescription" cols="30" rows="5" class="form-control form-control-lg">{{old('positiveDescription')}}</textarea>
            @error('positiveDescription')
                <p class="text-warning">{{$message}}</p>
            @enderror
            <br>

            <label for="negativeDescription">Enter your food item negative description</label><br>
            <textarea name="negativeDescription" cols="30" rows="5" class="form-control form-control-lg">{{old('negativeDescription')}}</textarea>
            @error('negativeDescription')
                <p class="text-warning">{{$message}}</p>
            @enderror
            <br>

            <label for="keyword">Enter your food item Keyword</label><br>
            <textarea name="keyword" cols="30" rows="5" class="form-control form-control-lg">{{old('keyword')}}</textarea>
            @error('keyword')
                <p class="text-warning">{{$message}}</p>
            @enderror
            <br>

            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
@endsection
{{-- user info input section design end form here --}}