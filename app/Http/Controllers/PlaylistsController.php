<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistsController extends Controller
{
    public function index() 
    {
        $playlists = Playlist::all();
        return view('playlists.index', compact('playlists'));
    }
}
