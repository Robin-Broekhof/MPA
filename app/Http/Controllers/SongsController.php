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


    public function store(Request $request)
    {
        dd($request);
    }
}
