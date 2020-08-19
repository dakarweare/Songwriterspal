<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;
use Auth;

class AlbumController extends Controller
{
    public function show(Request $request, Album $album) {

        return view('album.show', [
            'album' => $album,
            'songs' => $album->songs()->get()
        ]);
    }

    public function create(Request $request) {
        return view('album.create');
    }

    public function store(Request $request) {
        $youralbum=Album::create([
            "album_name" => $request->name,
            "artist_id" => Artist::where("user_id", Auth::id())->first()->id,
            "user_id" => Auth::id()
        ]);
        return redirect()->route("album.show",["album"=>$youralbum->id])->with([
            "message" => "Album created!"
        ]);
    }
}
