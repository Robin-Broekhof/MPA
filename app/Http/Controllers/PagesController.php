<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Song;


class PagesController extends Controller
{
    public function index() 
    {
        $genres = Genre::all();
        $songs = Song::all();
        return view('index', compact('genres', 'songs'));
    }

    public function login() {
        return view('auth/login');
    }

    public function register() {
        return view('auth/register');
    }



}
