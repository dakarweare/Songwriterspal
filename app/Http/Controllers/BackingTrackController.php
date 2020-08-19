<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackingTrackController extends Controller
{
    public function show($backingTrack) {
        
        $backingTracks = [
            "cab_calloway" => "Famous 1920s swing musician",
            "mc_chris" => "Underground rapper"
        ];

        if (! array_key_exists($backingTrack, $backingTracks)) {
            abort(404, "Sorry, that backing track was not found");
        }

        return view('backing track', [
            'backing_track' => $backingTracks[$backingTrack]
        ]);
    }
}
