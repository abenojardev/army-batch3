<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->string('category');
            $table->date('date_published');

            $table->unsignedBigInteger('author_id')->index();
            $table->unsignedBigInteger('publisher_id')->index();
            
            $table->foreign('author_id')
                ->references('id')
                ->on('authors');

            $table->foreign('publisher_id')
                ->references('id')
                ->on('publishers');

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
        Schema::dropIfExists('books');
    }
}
