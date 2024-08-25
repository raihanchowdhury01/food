@extends('admin.seo')
@section('title')
    SEO~Home page
@endsection

@section('meta')
<meta name="keywords" content="khjk">
<meta name="description" content="ugu">
@endsection
@section('content')
    <div class="container mb-5">
        <label for="title">Page Title</label><br>
        <input type="text" name="title" class="form-control form-control-lg"><br>
        <label for="keyword">Page Keyword</label><br>
        <textarea name="keyword" id="" cols="30" rows="10" class="form-control form-control-lg"></textarea><br>
        <label for="description">Page Description</label><br>
        <textarea name="description" cols="30" rows="10" class="form-control form-control-lg"></textarea><br>
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
@endsection