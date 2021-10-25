@extends('layouts.app')
@section('content')





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header"> {{ $playlist->name }} </h2>
                <a href="/playlists" class="btn btn-dark">Return To The Playlists Page</a>
                <div class="card-body">
                    

                    <table class="table table-dark table-hover">
                        <tr>
                          <th>Song Name</th>
                          <th>Creator</th>
                          <th>Genre</th>
                          <th>Duration</th>
                        </tr>
                        @forelse ($playlist->songs as $song)
                            <tr>
                              <td>{{ $song->name}}</td>
                              <td>{{ $song->creator}}</td>
                              <td>{{ $song->genre->name}}</td>
                              <td>{{ $song->length}}</td>
                            </tr>
                        @empty
                            <a>No songs in this playlist yet</a>

                        @endforelse
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection