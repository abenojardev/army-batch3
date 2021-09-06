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
            /**
             * title
             * author
             * category
             * image
             * description
             */

            $table->string('title');

            $table->unsignedBigInteger('author_id')->index();
            $table->unsignedBigInteger('category_id')->index();

            $table->foreign('author_id')
                  ->references('id')
                  ->on('author');
            
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
