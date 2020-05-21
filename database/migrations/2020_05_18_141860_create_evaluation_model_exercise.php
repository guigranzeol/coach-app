<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationModelExercise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_model_exercises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //id exercise
            $table->unsignedInteger('people_id');
            $table->foreign('people_id')->references('id')->on('people');   

            //id implements
            $table->unsignedInteger('implement_id');
            $table->foreign('implement_id')->references('id')->on('implements');  

            //id movements names
            $table->unsignedInteger('movement_name_id');
            $table->foreign('movement_name_id')->references('id')->on('movement_names');  

            //id evaluation model
            $table->unsignedInteger('evaluation_model_id');
            $table->foreign('evaluation_model_id')->references('id')->on('evaluation_models');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation_model_exercise');
    }
}
