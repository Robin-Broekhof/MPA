<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistsController extends Controller
{

    /**
     * show which pages are accessible if not logged in
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [

            ]]);
    }







    /**
     * shows the index page
     */
    public function index() 
    {
        $playlists = Playlist::all();
        return view('playlists.index', compact('playlists'));
    }
    /**
     * shows detail page of a single playlist
     *
     * @param [int] $playlist_id
     */
    public function details($playlist_id)    // !!** naar compact veranderen
    {
        return view('playlists.details')
            ->with('playlist', Playlist::where('playlist_id', $playlist_id)->first());
    }






    /**
     * shows the create page
     *
     */
    public function create() 
    {
        $playlists = Playlist::all();
        return view('playlists.create', compact('playlists'));
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
            'description' => 'required'
        ]);

        Playlist::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/playlists')->with('message', 'playlist created'); 
    }








    /**
     * shows the form page of the update functionality
     *
     * @param [int] $playlist_id
     */
    public function update($playlist_id)
    {
        return view('playlists.update')
            ->with('playlist', Playlist::where('playlist_id', $playlist_id)->first());
    }
    /**
     * get the data from the update form request and updates the database
     *
     * @param Request $request
     * @param [int] $playlist_id
     */
    public function updateIntoDB(Request $request, $playlist_id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Playlist::where('playlist_id', $playlist_id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description')
            ]);
            return redirect('/playlists')->with('message', 'playlist successfully updated');
    }




    
    /**
     * deletes playlist entry
     *
     * @param [int] $playlist_id
     */
    public function delete($playlist_id)
    {
        $playlist = Playlist::where('playlist_id', $playlist_id);
        $playlist->delete();
        return redirect('/playlists')->with('message', 'playlist successfully deleted');
    }
















}
