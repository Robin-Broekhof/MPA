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
    
    

}
