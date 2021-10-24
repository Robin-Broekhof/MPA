<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Song;

class GenresController extends Controller
{
    public function index() 
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }
    public function showbygenre($genre_id)    // !!** naar compact veranderen
    {
        return view('genres.showbygenre')
            ->with('genre', Genre::where('genre_id', $genre_id)->first());
    }
    

}
