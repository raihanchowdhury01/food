@extends('admin.master')
@section('title')
    Edit Page
@endsection

@section('content')
<div class="px-5 mb-5 mt-3">
    <form action="{{ route('updatePage', $data->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @if ($data->Image)
            <img style="width: 150px; height: 150px;" src="{{ url('Uploaded_Photo/' . $data->Image) }}" alt="There is a food item image"><br>           
        @endif
        <label for="photo" class="text-capitalize">Enter your food item photo</label><br>
        <input value="{{old('photo', $data->Image)}}" type="file" name="photo" class="form-control form-control-lg"><br>
        @error('photo')
            <p class="text-warning">{{$message}}</p>
        @enderror

        <label for="alt">Enter your alt keyword</label><br>
        <input type="text" value="{{$data->alt}}" name="alt" class="form-control form-control-lg"><br>
        @if($errors->has('alt'))
            <span class="text-danger">{{ $errors->first('alt') }}</span>
        @endif
        <br>
        <label for="name" class="text-capitalize">Enter your food item name</label><br>
        <input value="{{$data->Name}}" type="text" name="name" class="form-control form-control-lg"><br>
        @if($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif

        <label for="item">Select your item category: </label><br>
        <select name="item">
            <option value="{{$data->Category}}" disabled selected class="text-secondary">Choose Your Item</option>
            <option value="{{$data->Category}}">Fruit and vegetables</option>
            <option value="{{$data->Category}}">Starchy food</option>
            <option value="{{$data->Category}}">Dairy</option>
            <option value="{{$data->Category}}">Protein</option>
            <option value="{{$data->Category}}">Fat</option>
        </select>
        @if ($errors->has('item'))
            <div class="text-danger">
                {{ $errors->first('item') }}
            </div>
        @endif
        <br><br>

        <label for="title" class="text-capitalize">Enter your food item title name</label><br>
        <input value="{{$data->Title}}" type="text" name="title" class="form-control form-control-lg"><br>
        @if($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif

        <label for="componentDescription">Enter your food item components description</label><br>
        <textarea name="componentDescription" cols="30" rows="5" class="form-control form-control-lg">{{$data->componentDescription}}</textarea><br>
        @if($errors->has('componentDescription'))
            <span class="text-danger">{{ $errors->first('componentDescription') }}</span>
        @endif

        <label for="positiveDescription">Enter your food item short description</label><br>
        <textarea name="positiveDescription" cols="30" rows="5" class="form-control form-control-lg">{{$data->positiveDescription}}</textarea><br>
        @if($errors->has('positiveDescription'))
            <span class="text-danger">{{ $errors->first('positiveDescription') }}</span>
        @endif

        <label for="negativeDescription">Enter your food item short description</label><br>
        <textarea name="negativeDescription" cols="30" rows="5" class="form-control form-control-lg">{{$data->negativeDescription}}</textarea><br>
        @if($errors->has('negativeDescription'))
            <span class="text-danger">{{ $errors->first('negativeDescription') }}</span>
        @endif
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>
@endsection