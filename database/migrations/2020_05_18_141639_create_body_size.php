<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodySize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body_size', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->decimal('weight',3,2);
            $table->decimal('height',3,2);
            $table->decimal('waist',3,2);
            $table->decimal('toracic',3,2);
            $table->decimal('abdomen',3,2);
            $table->decimal('hip',3,2);
            $table->decimal('arm_left',3,2);
            $table->decimal('arm_right',3,2);
            $table->decimal('thigh_left',3,2);
            $table->decimal('thigh_right',3,2);
            //people
            $table->unsignedInteger('people_id');
            $table->foreign('people_id')->references('id')->on('people');   


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body_size');
    }
}
