<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeSongFieldNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("songs", function(Blueprint $table) {
            $table->string("song_name")->nullable(true)->change();
            $table->string("length")->nullable(true)->change();
            $table->string("original_artist")->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("songs", function(Blueprint $table) {
            $table->string("song_name")->nullable(false)->change();
            $table->string("length")->nullable(false)->change();
            $table->string("original_artist")->nullable(false)->change();
        });
    }
}
