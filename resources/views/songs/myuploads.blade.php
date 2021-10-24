@extends('layouts.app')
@section('content')



    <h1 class="large-title">All Songs</h1>
    @if (auth::check())
        <a href="{{ url('songs/create')}} " class="btn btn-dark d-block">ADD SONG</a>
    @endif
    

    
    @foreach ($songs as $song)
        @if (auth()->id() == $song->user_id)
            <div class="card song-card">
                <div class="card-body">
                    <h5 class="card-title">{{ $song->name}}</h5>
                    <a class="card-text"> {{ $song->creator}} </a>
                    <a class="card-text"> {{ $song->length}} </a>



                    <br>
                    <a class="card-text">genre: {{ $song->genre_id }} </a>



                
                    
                    <a href="/songs/details/{{ $song->song_id}}" class="btn btn-outline-dark btn-block">DETAILS</a>
                    @if (auth::check())
                        <a href="/songs/delete/{{ $song->song_id }}" class="btn btn-danger">DELETE</a>
                        <a href="/songs/update/{{ $song->song_id }}" class="btn btn-warning">UPDATE</a>
                    @endif
                </div>
            </div>
        @endif
    @endforeach


    
@endsection
