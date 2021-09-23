@extends('layouts.app')
@section('content')

    <h1>genres page</h1>


    @foreach ($genres as $genre)
        <a href="/genres/{{ $genre->name}}"> {{ $genre->name}} </a>
        <a> ----- </a>
        <a> {{ $genre->description}} </a>
        <br>


    @endforeach




    
@endsection
