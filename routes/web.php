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
Route::get('/genres/details/', [GenresController::class, 'index']);

//songs page
Route::get('/songs', [SongsController::class, 'index']);
Route::get('/songs/create', [SongsController::class, 'create']);
Route::post('/songs/addToDB', [SongsController::class, 'addToDB']);
Route::get('/songs/details/{song_id}', [SongsController::class, 'details']);


//playlists page
Route::get('/playlists', [PlaylistsController::class, 'index']);
Route::get('/playlists/create', [PlaylistsController::class, 'create']);
Route::post('/playlists/addToDB', [PlaylistsController::class, 'addToDB']);

Route::get('/playlists/details/{$id}', [PlaylistsController::class, 'details']);











//login page
Auth::routes();
Route::get('/login', [PagesController::class, 'login'])->name('login');

//resister page
Auth::routes();
Route::get('/register', [PagesController::class, 'register'])->name('register');

//when already loggin in go to the home page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//logout function
 
 Route::get('/logout', [UsersController::class, 'logout'])->name('logout');

 Route::get('/test', [UsersController::class, 'usertest']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
