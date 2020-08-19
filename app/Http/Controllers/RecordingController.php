<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordingController extends Controller
{
    public function show($recording) {
        
        $recordings = [
            "cab_calloway" => "Famous 1920s swing musician",
            "mc_chris" => "Underground rapper"
        ];

        if (! array_key_exists($recording, $recordings)) {
            abort(404, "Sorry, that recording was not found");
        }

        return view('recording', [
            'recording' => $recordings[$recording]
        ]);
    }
}
