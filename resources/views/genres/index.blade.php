@extends('layouts.app')
@section('content')



    <h1 class="large-title">All Genres</h1>
    @foreach ($genres as $genre)
        <div class="genre-container">
            <a href="showgenre/{{ $genre->genre_id }}" class="btn btn-dark"> {{ $genre->name }} </a>
        </div>
    @endforeach


    
@endsection
