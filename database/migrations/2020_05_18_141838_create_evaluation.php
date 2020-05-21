<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            //coach
            $table->unsignedInteger('coach_id')->nullable();
            $table->foreign('coach_id')->references('id')->on('coaches');
            //people_id
            $table->unsignedInteger('people_id');
            $table->foreign('people_id')->references('id')->on('people');   
            //evaluation_model
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
        Schema::dropIfExists('evaluation');
    }
}
