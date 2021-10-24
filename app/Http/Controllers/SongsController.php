<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Song;

class SongsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
            'details'
            ]]);
    }


    public function index() 
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }
    public function details($song_id)    // !!** naar compact veranderen
    {
        return view('songs.details')
            ->with('song', Song::where('song_id', $song_id)->first());
    }
    
    public function details2($song_id) 
    {
        $songs = Song::all();
        return view('songs.details', compact('songs'));
    }
    







    public function create() 
    {
        $songs = Song::all();
        $genres = Genre::all();
        return view('songs.create', compact('songs', 'genres'));
    }
    public function addToDB(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'creator' => 'required',
            'genre_id' => 'required',
            'length' => 'required'
        ]);

        
        Song::create([
            'name' => $request->input('name'),
            'creator' => $request->input('creator'),
            'genre_id' => $request->input('genre_id'),
            'length' => $request->input('length')
            //'user_id' => auth()->user()->id
        ]);

        return redirect('/songs')->with('message', 'song added');
        




        
    }
}
