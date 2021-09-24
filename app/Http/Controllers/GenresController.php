<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Liedje;

class GenresController extends Controller
{
    public function index() 
    {
        $genres = Genre::all();
        $liedjes = Liedje::all();
        return view('genres/index', compact('genres', 'liedjes'));
    }

    

}
