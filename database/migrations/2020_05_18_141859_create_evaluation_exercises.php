<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationExercises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_exercises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        
             //evaluation_id
             $table->unsignedInteger('evaluation_id');
             $table->foreign('evaluation_id')->references('id')->on('evaluation');  
            
            //movements_name_id
            $table->unsignedInteger('movement_name_id');
            $table->foreign('movement_name_id')->references('id')->on('movement_names');  

            //implements_id
            $table->unsignedInteger('implement_id');
            $table->foreign('implement_id')->references('id')->on('implements');  

            $table->decimal('implement_weight',3,2);
            $table->integer('sets');
            $table->integer('movements_repetition');
            $table->integer('time');

   



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation_exercises');
    }
}
//TODO