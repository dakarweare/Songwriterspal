<?php

use Illuminate\Database\Seeder;
use App\Artist;
use App\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists=Artist::all();

        foreach($artists as $artist){
        
        Album::create([
            "album_name" => "Dark Side of the Moon",
            "artist_id" => $artist->id
        ]);
        }
    }
}
