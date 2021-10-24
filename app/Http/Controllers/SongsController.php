<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Song;

class SongsController extends Controller
{
    /**
     * show which pages are accessible if not logged in
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
            'details'
            ]]);
    }

    /**
     * shows the index page
     */
    public function index() 
    {
        $songs = Song::all();
        $genres = Genre::all();
        return view('songs.index', compact('songs', 'genres'));
    }
    /**
     * shows the myuploads page
     */
    public function myuploads() 
    {
        $songs = Song::all();
        $genres = Genre::all();
        return view('songs.myuploads', compact('songs', 'genres'));
    }
    /**
     * shows detail page of a single playlist
     *
     * @param [int] $playlist_id
     */
    public function details($song_id)    // !!** naar compact veranderen
    {
        return view('songs.details')
            ->with('song', Song::where('song_id', $song_id)->first());
    }
    






    /**
     * shows the create page
     *
     */
    public function create() 
    {
        $songs = Song::all();
        $genres = Genre::all();
        return view('songs.create', compact('songs', 'genres'));
    }
    /**
     * adds the data requested from the create page into the database
     *
     * @param Request $request
     */
    public function addToDB(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'creator' => 'required',
            'length' => 'required'
        ]);

        Song::create([
            'name' => $request->input('name'),
            'creator' => $request->input('creator'),
            'genre_id' => $request->input('genre_id'),
            'length' => $request->input('length'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/myuploads')->with('message', 'song added');
    }

    /**
     * shows the form page of the update functionality
     *
     * @param [int] $song_id
     */
    public function update($song_id)
    {
        $genres = Genre::all();
        return view('songs.update', compact('genres'))
            ->with('song', Song::where('song_id', $song_id)->first());
    }

    /**
     * get the data from the update form request and updates the database
     *
     * @param Request $request
     * @param [int] $playlist_id
     */
    public function updateIntoDB(Request $request, $song_id)
    {
        $request->validate([
            'name' => 'required',
            'creator' => 'required',
            'genre_id' => 'required',
            'length' => 'required'
        ]);

        Song::where('song_id', $song_id)
            ->update([
                'name' => $request->input('name'),
                'creator' => $request->input('creator'),
                'genre_id' => $request->input('genre_id'),
                'length' => $request->input('length')
                //'user_id' => auth()->user()->id
            ]);
            return redirect('/songs')->with('message', 'song successfully updated');
    }


    /**
     * deletes playlist entry
     *
     * @param [int] $playlist_id
     */
    public function delete($song_id)
    {
        $song = Song::where('song_id', $song_id);
        $song->delete();
        return redirect('/songs')->with('message', 'playlist successfully deleted');
    }



}
