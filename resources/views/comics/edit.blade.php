@extends('layouts.app')

@section('main_content')
    <div class="container">

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection