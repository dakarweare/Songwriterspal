<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Recording;

class RecordingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs=Song::all();

        foreach($songs as $song) {
        Recording::create([
            "recording_name" => "Recording #1",
            "song_id" => $song->id
        ]);
        }
    }
}
