<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('genre_id')->index();
            $table->unsignedBigInteger('artist_id')->index();
            $table->unsignedBigInteger('album_id')->index();

            $table->foreign('genre_id')->references('id')->on('genre');
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('album_id')->references('id')->on('albums');
            
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
        Schema::dropIfExists('songs');
    }
}
