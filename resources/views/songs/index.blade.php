@extends('layouts.app')
@section('content')



    <h1 class="large-title">All Songs</h1>

    
    @foreach ($songs as $song)
        <div class="card song-card">
            <div class="card-body">
                <h4 class="card-title">{{ $song->name}}</h4>
                <a class="card-text"> {{ $song->creator}} </a><br>
                <a class="card-text"> {{ $song->length}} </a>



                <br>
                <a class="card-text">genre: {{ $song->genre->name }} </a>
                <br>
                <a class="card-text">uploaded by: {{ 


                $song->user->name
                
                
                }} </a>



               
                
                <a href="/songs/details/{{ $song->song_id}}" class="btn btn-outline-dark btn-block">DETAILS</a>
            </div>
        </div>
    @endforeach


    
@endsection
