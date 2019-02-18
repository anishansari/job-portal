<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fours', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name');
                 $table->string('email');
                 $table->string('password');
                 $table->integer('mobile');
                 $table->integer('age');
                 $table->string('location');
                 $table->string('resume');
                 $table->string('skills');
                 $table->string('course');
                 $table->string('college');
                     
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
        Schema::dropIfExists('fours');
    }
}
