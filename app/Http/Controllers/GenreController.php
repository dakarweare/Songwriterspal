<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show($genre) {
        
        $genres = [
            
        ];

        if (! array_key_exists($genre, $genres)) {
            abort(404, "Sorry, that genre was not found");
        }

        return view('genre', [
            'genre' => $genres[$genre]
        ]);
    }
}
