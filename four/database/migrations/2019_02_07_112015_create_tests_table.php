<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
           $table->increments('id');
                 $table->string('jobtitle');
                 $table->string('company');
                 $table->string('jdesc');
                 $table->string('skillneed');
                 $table->integer('duration');
                 $table->string('qualification');
                 $table->string('experiance');
                 $table->string('location');
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
        Schema::dropIfExists('tests');
    }
}
