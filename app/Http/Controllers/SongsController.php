<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongsController extends Controller
{
    public function index() 
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }
}
