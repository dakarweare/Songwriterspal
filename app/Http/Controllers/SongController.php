<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Song;
use Log;

class SongController extends Controller
{
    public function show(Request $request, Song $song) {

        return view('song.show', [
            'song' => $song,
            //'genre' => $song->genres()->get()
        ]);
    }

    public function update(Request $request, Song $song) : JsonResponse {
        try {
            dd($request);
            $song->fill($request->toArray());

            $song->save();

            return new JsonResponse(["status" => 1, "song" => $song]);
        } catch(\Exception $e)
        {
            return new JsonResponse(["status" => 0, "message" => $e->getMessage()]);
        }
    }

    public function store(Request $request) {
        $yoursong=Song::create([
            "album_id" => $request->album_id
        ]);
        return redirect()->route("song.show",["song"=>$yoursong->id])->with([
            "message" => "Song created!"
        ]);
    }
}
