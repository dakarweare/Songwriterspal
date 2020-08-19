<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use Auth;

class ArtistController extends Controller
{
    public function show(Request $request, Artist $artist) {
        
        $artists = [
            "cab_calloway" => "Famous 1920s swing musician",
            "mc_chris" => "Underground rapper"
        ];

        if (! array_key_exists($artist, $artists)) {
            abort(404, "Sorry, that artist was not found");
        }

        return view('artist.show', [
            'artist' => $artists[$artist]
        ]);
    }

    public function create(Request $request) {
        return view('artist.create');
    }

    public function store(Request $request) {
        Artist::create([
            "artist_name" => $request->name,
            "user_id" => Auth::id()
        ]);
        return redirect()->route("home")->with(["alert" => "Artist was created!"]);
    }

}
