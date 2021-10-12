<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\PlaylistsController;


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
Route::get('/genres/details?id=', [GenresController::class, 'index']);

//songs page
Route::get('/songs', [SongsController::class, 'index']);
Route::get('/songs/details?id={$id}', [SongsController::class, 'details']);

//playlists page
Route::get('/playlists', [PlaylistsController::class, 'index']);
Route::get('/playlists/details?id={$id}', [PlaylistsController::class, 'details']);











//login page
Auth::routes();
Route::get('/login', [PagesController::class, 'login'])->name('login');

//resister page
Auth::routes();
Route::get('/register', [PagesController::class, 'register'])->name('register');

//when already loggin in go to the home page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

