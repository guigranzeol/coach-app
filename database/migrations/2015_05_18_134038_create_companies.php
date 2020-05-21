<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
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
        Schema::dropIfExists('companies');
    }
}
