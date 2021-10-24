<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//main page 
Route::get('/', [PagesController::class, 'index']);

//genres page
Route::get('/genres', [GenresController::class, 'index']);
Route::get('/genres/showbygenre/{genre_id}', [GenresController::class, 'showbygenre']);

//songs page
Route::get('/songs', [SongsController::class, 'index']);
Route::get('/myuploads', [SongsController::class, 'myuploads']);
Route::get('/songs/details/{song_id}', [SongsController::class, 'details']); 
Route::get('/songs/create', [SongsController::class, 'create']);
Route::post('/songs/addToDB', [SongsController::class, 'addToDB']);
Route::get('/songs/update/{song_id}', [SongsController::class, 'update']);
Route::put('/songs/updateIntoDB/{song_id}', [SongsController::class, 'updateIntoDB']);
Route::get('/songs/delete/{song_id}', [SongsController::class, 'delete']);



//playlists page
Route::get('/playlists', [PlaylistsController::class, 'index']);
Route::get('/playlists/details/{playlist_id}', [PlaylistsController::class, 'details']);
Route::get('/playlists/create', [PlaylistsController::class, 'create']);
Route::post('/playlists/addToDB', [PlaylistsController::class, 'addToDB']);
Route::get('/playlists/update/{playlist_id}', [PlaylistsController::class, 'update']);
Route::put('/playlists/updateIntoDB/{playlist_id}', [PlaylistsController::class, 'updateIntoDB']);
Route::get('/playlists/delete/{playlist_id}', [PlaylistsController::class, 'delete']);












//login page
Auth::routes();
Route::get('/login', [PagesController::class, 'login'])->name('login');

//resister page
Auth::routes();
Route::get('/register', [PagesController::class, 'register'])->name('register');

//when already loggin in go to the home page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//logout function
Auth::routes();
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
