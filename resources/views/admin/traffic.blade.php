@extends('admin.master')
@section('title')
    Traffic control
@endsection
@section('meta')
    <meta name="description" content="traffic control section"/>
    <meta name="keyword" content="traffic"/>
@endsection
@section('content')
    <h1>Daily Visitors</h1>
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Total Visits</th>
        </tr>
        @foreach($visitors as $visitor)
        <tr>
            <td>{{ $visitor->visit_date }}</td>
            <td>{{ $visitor->total_visits }}</td>
        </tr>
        @endforeach
    </table>
@endsection