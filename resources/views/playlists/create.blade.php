@extends('layouts.app')
@section('content')


@if (auth::check())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">Create a playlist</h2>
                <div class="card-body">
                    <form method="POST" action="{{ url('playlists/addToDB')}} ">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Playlist name</label>
                            <div class="col-md-6">
                                <input id="name" name="name" type="text" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="creator" class="col-md-4 col-form-label text-md-right">Playlist description</label>
                            <div class="col-md-6">
                                <input id="description" name="description" type="text" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">CREATE</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@else

LOG IN
    
@endif


@endsection