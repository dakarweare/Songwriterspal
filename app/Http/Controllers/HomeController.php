<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artist = Artist::where("user_id", Auth::id())->first();
        if(is_null($artist)) {
            return redirect()->route("artist.create");
        }
        $albums = Album::where("artist_id", $artist->id)->get();
        return view('home')->with(["albums" => $albums]);
    }
}
