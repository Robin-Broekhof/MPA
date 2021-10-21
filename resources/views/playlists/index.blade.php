@extends('layouts.app')
@section('content')



@if (auth::check())



<h1> {{ auth()->user()->id }} </h1>
<h1>ALl playlists</h1>
<a href="{{ url('playlists/create')}} " class="btn btn-dark d-block">CREATE PLAYLIST</a>
@foreach ($playlists as $playlist)
    @if (auth()->user()->id == $playlist->user_id)
        <div class="card song-card">
            <div class="card-body">
                <h5 class="card-title">{{ $playlist->name}}</h5>
                <p class="card-text"> {{ $playlist->description}} </p>
                <a href="playlists/details?id={{$playlist->playlist_id}}" class="btn btn-outline-dark btn-block">MORE</a>
                <a href="#" class="btn btn-outline-danger">DELETE</a>
                <a href="#" class="btn btn-outline-warning">UPDATE</a>
                <a> {{ $playlist->user_id }} </a>
            </div>
        </div>
    
    
    @endif
@endforeach



@else
<div>
    <h1 class="text-center mt-4 bg-light text-dark ">
        Log in to access playlists
    </h1>
</div>



@endif


    
@endsection