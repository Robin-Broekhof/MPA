@extends('layouts.app')
@section('content')





<h1>ALl playlists</h1>
<a href="{{ url('playlists/create')}} " class="btn btn-dark d-block">CREATE PLAYLIST</a>


@if (session()->has('message'))
    <div>
        <h2 class="bg-success">
            {{ session()->get('message') }}
        </h2>
    </div>
@endif

@foreach ($playlists as $playlist)
    @if (auth()->user()->id == $playlist->user_id)
        <div class="card song-card">
            <div class="card-body">
                <h5 class="card-title">{{ $playlist->name}}</h5>
                <p class="card-text"> {{ $playlist->description}} </p>
                <a href="/playlists/details/{{ $playlist->id}}" class="btn btn-outline-dark btn-block">DETAILS</a>
                <a href="/playlists/delete/{{ $playlist->id }}" class="btn btn-outline-danger">DELETE</a>
                <a href="/playlists/update/{{ $playlist->id }}" class="btn btn-outline-warning">UPDATE</a>
            </div>
        </div>
    
    
    @endif
@endforeach





    
@endsection