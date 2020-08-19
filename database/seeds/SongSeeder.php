<?php

use Illuminate\Database\Seeder;
use App\Album;
use App\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums=Album::all();

        foreach($albums as $album) {
        
        Song::create([
            "song_name" => "Wayne's Bioluminescent Cats",
            "album_id" => $album->id,
            "order" => "1",
            "length" => "5:55",
            "original_artist" => "Cab Calloway"
        ]);
        }
    }
}
