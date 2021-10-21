<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Song;

class SongsController extends Controller
{
    public function index() 
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }
    public function details() 
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
        




        
        //https://www.youtube.com/watch?v=HKJDLXsTr8A
    }
}
