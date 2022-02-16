@extends('layouts.app')

@section('main_content')
    <div class="card" style=";">
        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comic['title'] }}</h5>
            <p class="card-text">Description: {{$comic['description']}}</p>
            <p class="card-text">Price: {{$comic['price']}}</p>
            <p class="card-text">Series: {{$comic['series']}}</p>
            <p class="card-text">Sale date: {{$comic['sale_date']}}</p>
            <p class="card-text">Type: {{$comic['type']}}</p>
        </div>
    </div>
@endsection