<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            
            ]]);
    }

    public function index() 
    {
        $playlists = Playlist::all();
        return view('playlists.index', compact('playlists'));
    }
    public function details($playlist_id)    // !!** naar compact veranderen
    {
        return view('playlists.details')
            ->with('playlist', Playlist::where('playlist_id', $playlist_id)->first());
    }
    // public function details2() 
    // {
    //     $playlists = Playlist::all();
    //     return view('playlists.details', compact('playlists'));
    // }



    public function create() 
    {
        $playlists = Playlist::all();
        return view('playlists.create', compact('playlists'));
    }
    public function addToDB(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Playlist::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/playlists')->with('message', 'playlist created'); 
    }


    public function update($playlist_id)
    {
        return view('playlists.update')
            ->with('playlist', Playlist::where('playlist_id', $playlist_id)->first());
    }
    public function updateIntoDB(Request $request, $playlist_id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Playlist::where('playlist_id', $playlist_id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description')
            ]);
            return redirect('/playlists')->with('message', 'playlist successfully updated');
    }

    public function delete($playlist_id)
    {
        $playlist = Playlist::where('playlist_id', $playlist_id);
        $playlist->delete();
        return redirect('/playlists')->with('message', 'playlist successfully deleted');

    }
















}
