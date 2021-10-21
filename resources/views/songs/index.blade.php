@extends('layouts.app')
@section('content')


@if (session()->has('message'))
    <div>
        <p>
            {{ session()->get('message') }}
        </p>
    </div>
@endif

    <h1 class="large-title">All Songs</h1>
    <a href="{{ url('songs/create')}} " class="btn btn-dark d-block">ADD SONG</a>
    @foreach ($songs as $song)
        <div class="card song-card">
            <div class="card-body">
                <h5 class="card-title">{{ $song->name}}</h5>
                <a class="card-text"> {{ $song->creator}} </a>
                <a class="card-text"> {{ $song->length}} </a>
                <p class="card-text"> {{ $song->genre_id }} </p>
                <a href="" class="btn btn-outline-dark btn-block">DETAILS</a>
            </div>
        </div>
    @endforeach


    
@endsection
