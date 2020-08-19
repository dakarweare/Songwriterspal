<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('home', '\App\Http\Controllers\HomeController@index')->name("home");

Route::get('artist/create', '\App\Http\Controllers\ArtistController@create')->name("artist.create");
Route::post('artist/store', '\App\Http\Controllers\ArtistController@store')->name("artist.store");

Route::get('album/show/{album}', '\App\Http\Controllers\AlbumController@show')->name("album.show");
Route::get('album/create', '\App\Http\Controllers\AlbumController@create')->name("album.create");
Route::post('album/store', '\App\Http\Controllers\AlbumController@store')->name("album.store");

Route::get('song/show/{song}', '\App\Http\Controllers\SongController@show')->name("song.show");
Route::post('song/update/{song}', '\App\Http\Controllers\SongController@update')->name("song.update");
Route::post('song/store', '\App\Http\Controllers\SongController@store')->name("song.store");

Route::get('genre', function () {
    return view('genre');
});

Route::get('/recording', function () {
    return view('recording');
});

Route::get('/backing_track', function () {
    return view('backing_track');
});