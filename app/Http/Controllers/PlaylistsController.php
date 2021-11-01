<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Playlist;
use App\Models\Song;
use App\Models\Genre;
use App\Models\Playlist_song;

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
        if ($id == 0) {
            
            $queue = true;
            $songs = Song::all();
            return view('playlists.details', compact('songs'))
                ->with('queue', $queue);
        }
        else{
            $queue = false;
            return view('playlists.details')
                ->with('playlist', Playlist::where('id', $id)->first())->with('queue', $queue);
        }
    }

    public function convertplaylist()
    {
        return view('playlists.convertplaylist');
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



    public function createPlaylistFromQueue(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $playlist = Playlist::create([
            'id' => null,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'user_id' => auth()->user()->id
        ]);

        foreach (Session::get('song_id') as $key => $item) {
            Playlist_song::create([
                'playlist_id' => $playlist->id,
                'song_id' => Session::get('song_id')[$key]
            ]);
        }

        Session::forget('name');
        Session::forget('song_id');
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


    public function removefromplaylist($playlist_id, $song_id)
    {
        $playlist_song = Playlist_song::where('playlist_id', $playlist_id)
        ->where('song_id', $song_id);
        $playlist_song->delete();
        return redirect('/playlists/details/'.$playlist_id)->with('message', 'song successfully deleted');
    }


    
    public function removeSongFromQueue(Request $request, $song_id)
    {

        $songs = session()->pull('song_id', []); // Second argument is a default value
        if(($key = array_search($song_id, $songs)) !== false) {
            unset($songs[$key]);
        }
        session()->put('song_id', $songs);



        return redirect('/playlists/details/0')->with('message', 'song successfully deleted');
    }



    public function removequeue()
    {
        Session::forget('name');
        Session::forget('song_id');
        return redirect('/playlists')->with('message', 'queue has been removed');
    }








}
