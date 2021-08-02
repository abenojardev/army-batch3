<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * no spaces, user underscore
         * small letters
         */
        Schema::create('army', function (Blueprint $table) {
            $table->id();
            // alpha
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name'); 
            // if numeric
            $table->integer('age'); 
            // for dates
            $table->date('birth_date'); 
            // for preset values
            $table->enum('gender', [
                'Male',
                'Female'
            ]);  
            // for datas with decimal points
            $table->double('height');
            $table->double('weight'); 
            // for datas that could be bigger than 255 chars
            $table->longText('address'); 
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
        Schema::dropIfExists('army');
    }
}
