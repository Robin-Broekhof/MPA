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
    public function details($id)    // !!** naar compact veranderen
    {
        return view('playlists.details')
            ->with('playlist', Playlist::where('id', $id)->first());
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
     * @param [int] $id
     */
    public function update($id)
    {
        return view('playlists.update')
            ->with('playlist', Playlist::where('id', $id)->first());
    }
    /**
     * get the data from the update form request and updates the database
     *
     * @param Request $request
     * @param [int] $id
     */
    public function updateIntoDB(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Playlist::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description')
            ]);
            return redirect('/playlists')->with('message', 'playlist successfully updated');
    }




    
    /**
     * deletes playlist entry
     *
     * @param [int] $id
     */
    public function delete($id)
    {
        $playlist = Playlist::where('id', $id);
        $playlist->delete();
        return redirect('/playlists')->with('message', 'playlist successfully deleted');
    }
















}
