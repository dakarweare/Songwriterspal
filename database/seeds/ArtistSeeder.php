<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=User::all();
        
        foreach($users as $user){
        
        Artist::create([
            "artist_name" => "Cab Calloway",
            "user_id" => $user->id
        ]);
        }
    }
}
