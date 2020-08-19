<?php

use Illuminate\Database\Seeder;

class BackingTrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::create([
            "backing_track_name" => "Wayne's Bioluminescent Cats",
            "length" => "5:55"
        ]);
    }
}
