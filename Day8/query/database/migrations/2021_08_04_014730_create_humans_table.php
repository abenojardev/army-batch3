<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humans', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');

            $table->integer('age');
            $table->enum('gender',[
                'Male',
                'Female'
            ]); 
            $table->enum('city',[
                'Taguig',
                'Makati',
                'Mandaluyong',
                'San Juan',
                'Quezon',
                'Manila',
                'Marikina',
                'Antipolo',
                'Valenzuela',
                'Pasay',
                'Paranaque',
                'Caloocan',
                'Novaliches',
                'Muntinlupa'
            ]);
            $table->date('birth_date');
            $table->enum('civil_status', [
                'Single',
                'Widowed',
                'Married',
                'Divorced'
            ]);
            $table->string('occupation');
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
        Schema::dropIfExists('humans');
    }
}
