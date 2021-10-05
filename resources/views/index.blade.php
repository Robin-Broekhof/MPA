@extends('layouts.app')
@section('content')



    <h1 class="large-title">All Genres</h1>
    @foreach ($genres as $genre)
        <div class="genre-container">
            <a href="showgenre/{{ $genre->genre_id }}" class="btn btn-dark"> {{ $genre->name }} </a>
        </div>
    @endforeach

    <div class="whitespace"></div>
    
    <h1 class="large-title">All Songs</h1>
    @foreach ($songs as $song)
        <div class="card song-card">
            <div class="card-body">
                <h5 class="card-title">{{ $song->name}}</h5>
                <a class="card-text"> {{ $song->creator}} </a>
                <a class="card-text"> {{ $song->length}} </a>
                <p class="card-text"> {{ $song->genre_id }} </p>
            </div>
        </div>
    @endforeach


    
@endsection
