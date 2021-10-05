<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\PlaylistsController;

Auth::routes();

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

//songs page
Route::get('/songs', [SongsController::class, 'index']);

//playlists page
Route::get('/playlists', [PlaylistsController::class, 'index']);











//login page
Route::get('/login', [PagesController::class, 'login']);

//resister page
Route::get('/register', [PagesController::class, 'register']);

//when already loggin in go to the home page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

