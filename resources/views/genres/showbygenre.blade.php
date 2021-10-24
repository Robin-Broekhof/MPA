@extends('layouts.app')
@section('content')


<h2>genres details page</h2>

<a href="/genres" class="btn btn-dark">Return To The Genre Page</a>
<br>

@foreach ($songs as $song)
    @if ($genre->genre_id == $song->genre_id)
        
        <div class="card song-card">
            <div class="card-body">
                <h5 class="card-title">{{ $song->name}}</h5>
                <a class="card-text"> {{ $song->creator}} </a>
                <a class="card-text"> {{ $song->length}} </a>
                <p class="card-text"> {{ $song->genre_id }} </p>
                <a href="/songs/details/{{ $song->song_id}}" class="btn btn-outline-dark btn-block">DETAILS</a>
                <a href="/songs/delete/{{ $song->song_id }}" class="btn btn-danger">DELETE</a>
                <a href="/songs/update/{{ $song->song_id }}" class="btn btn-warning">UPDATE</a>
            </div>
        </div>

    @endif
@endforeach



@endsection