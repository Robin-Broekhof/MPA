@extends('layouts.app')
@section('content')


<h1>show all {{ $genre->name }} songs</h1>

<a href="/genres" class="btn btn-dark">Return To The Genre Page</a>
<br>

@foreach ($songs as $song)
    @if ($genre->id == $song->genre_id)
        
        <div class="card song-card">
            <div class="card-body">
                <h5 class="card-title">{{ $song->name}}</h5>
                <a class="card-text"> {{ $song->creator}} </a>
                <a class="card-text"> {{ $song->length}} </a><br>
                <a class="card-text">genre: {{ $song->genre->name }} </a>
                <br>
                <a href="/songs/details/{{ $song->id}}" class="btn btn-dark text-white">DETAILS</a>
                <a href="/songs/addtoplaylist/{{ $song->id }}" class="btn btn-info">Add to playlist</a>
            </div>
        </div>

    @endif
@endforeach



@endsection