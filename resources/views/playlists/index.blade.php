@extends('layouts.app')
@section('content')

<h1>ALl playlists</h1>
@foreach ($playlists as $playlist)
<div class="card song-card">
    <div class="card-body">
        <h5 class="card-title">{{ $playlist->name}}</h5>
        <p class="card-text"> {{ $playlist->description}} </p>
        <a href="playlists/details?id={{$playlist->playlist_id}}" class="btn btn-outline-dark btn-block">MORE</a>
        <a href="#" class="btn btn-outline-danger">DELETE</a>
        <a href="#" class="btn btn-outline-warning">UPDATE</a>
    </div>
</div>
    
@endforeach

    
@endsection