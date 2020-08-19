<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "John Boyega",
            "email" => "artistexample1@me.com",
            "password" => Hash::make("password")
        ]);

        User::create([
            "name" => "Keanu Reeves",
            "email" => "artistexample2@me.com",
            "password" => Hash::make("password")
        ]);

        User::create([
            "name" => "Kimmy Schmidt",
            "email" => "artistexample3@me.com",
            "password" => Hash::make("password")
        ]);

        User::create([
            "name" => "Alan Rickman",
            "email" => "artistexample4@me.com",
            "password" => Hash::make("password")
        ]);

        User::create([
            "name" => "Space Ghost Coast to Coast",
            "email" => "artistexample5@me.com",
            "password" => Hash::make("password")
        ]);
    }
}
