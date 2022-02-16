@extends('layouts.app')

@section('main_content')
    <div class="flex">
        @foreach ($comics as $comic)
        
            <div class="card-container">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        <p class="card-text">{{$comic['description']}}</p>
                        <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}" class="btn btn-primary">Go to details</a>
                    </div>
                </div>
            </div>
        
        @endforeach
    </div>
@endsection