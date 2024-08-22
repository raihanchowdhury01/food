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

        <label for="name" class="text-capitalize">Enter your food item name</label><br>
        <input value="{{$data->Name}}" type="text" name="name" class="form-control form-control-lg"><br>

        <label for="item">Select your item category: </label><br>
        <select name="item">
            <option value="" disabled selected class="text-secondary">Choose Your Item</option>
            <option value="Fruit and vegetables">Fruit and vegetables</option>
            <option value="Starchy food">Starchy food</option>
            <option value="Dairy">Dairy</option>
            <option value="Protein">Protein</option>
            <option value="Fat">Fat</option>
        </select>
        <br><br>

        <label for="title" class="text-capitalize">Enter your food item title name</label><br>
        <input value="{{$data->Title}}" type="text" name="title" class="form-control form-control-lg"><br>

        <label for="componentDescription">Enter your food item components description</label><br>
        <textarea name="componentDescription" cols="30" rows="5" class="form-control form-control-lg">{{$data->componentDescription}}</textarea><br>

        <label for="positiveDescription">Enter your food item short description</label><br>
        <textarea name="positiveDescription" cols="30" rows="5" class="form-control form-control-lg">{{$data->positiveDescription}}</textarea><br>

        <label for="negativeDescription">Enter your food item short description</label><br>
        <textarea name="negativeDescription" cols="30" rows="5" class="form-control form-control-lg">{{$data->negativeDescription}}</textarea><br>

        <label for="keyword">Enter your food item keyword</label><br>
        <textarea name="keyword" cols="30" rows="5" class="form-control form-control-lg">{{$data->Keyword}}</textarea><br>

        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>
@endsection