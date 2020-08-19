<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Song extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("songs", function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("album_id");
            $table->foreign("album_id")->references("id")->on("albums");
            $table->string("song_name")->nullable(false);
            $table->string("order")->nullable();
            $table->string("length")->nullable(false);
            $table->string("original_artist")->nullable(false);
            $table->timestamps();
            $table->timestamp("published_at")->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("songs");
    }
}
