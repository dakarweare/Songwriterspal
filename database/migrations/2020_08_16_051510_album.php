<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Album extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("albums", function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("artist_id");
            $table->foreign("artist_id")->references("id")->on("artists");
            $table->string("album_name")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("albums");
    }
}
