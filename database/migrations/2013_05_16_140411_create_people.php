<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fantasy_name');
            $table->string('social_name')->nullable();
            $table->date('birthday')->nullable();
            $table->string('cpf_cnpj');
            $table->string('note')->nullable();
            $table->string('phone_number');
            $table->string('adress');
            $table->string('state');
            $table->string('zip_code');
            $table->string('city');
            $table->string('country');
            $table->decimal('1th_weight',3,2);
            $table->decimal('1th_height',3,2);
            $table->decimal('1th_waist',3,2)->nullable();
            $table->timestamps();
            $table->boolean('status')->deafult(true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
