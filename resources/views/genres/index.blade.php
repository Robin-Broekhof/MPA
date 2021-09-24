@extends('layouts.app')
@section('content')

    <h1>genres page</h1>


    @foreach ($genres as $genre)
        <a href="/genres={{ $genre->name}}"> {{ $genre->name}} </a>
        <a> ----- </a>
        <a> {{ $genre->description}} </a>
        <br>
    @endforeach


    <h1>alle liedjes</h1>

    @foreach ($liedjes as $liedje)


        <a href="./genres={{ $liedje->name }}"> {{ $liedje->name}} </a>
        <a> (van: {{ $liedje->creator}}) </a>
        <a> (album: {{ $liedje->album}}) </a>
        

    @endforeach


    
@endsection
