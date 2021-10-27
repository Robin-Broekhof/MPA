@extends('layouts.app')
@section('content')


<a>00:25:22</a>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header"> Playlist Name: {{ $playlist->name }} </h2>

                
                <!--
                <h2 class="card-header"> Total length: 
                    {{  $playlistTotalTime = $playlist->songs->sum(''); }}
                    <a>
                        {{ $playlistTotalTime }}
                    </a>
                </h2>
                -->

                <a href="/playlists" class="btn btn-dark">Return To The Playlists Page</a>
                <div class="card-body">
                    
                    @if ($playlist->songs->isEmpty())
                        <a>No songs in playlist</a>
                    @else
                        <table class="table table-dark table-hover">
                            <tr>
                            <th>Song Name</th>
                            <th>Creator</th>
                            <th>Genre</th>
                            <th>Duration</th>
                            <th>Delete</th>
                            </tr>
                    @endif

                        @forelse ($playlist->songs as $song)
                            <tr>
                              <td>{{ $song->name}}</td>
                              <td>{{ $song->creator}}</td>
                              <td>{{ $song->genre->name}}</td>
                              <td>{{ $song->length}}</td>
                              <td><a href="removefromplaylist/{{ $playlist->id, $song->id }}" class="btn btn-danger">X</a></td>
                            </tr>
                        @empty

                        @endforelse
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection