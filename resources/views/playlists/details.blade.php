@extends('layouts.app')
@section('content')





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header"> {{ $playlist->name }} </h2>
                <a href="/playlists" class="btn btn-dark">Return To The Playlists Page</a>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection