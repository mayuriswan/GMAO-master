<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('mtva');
            $table->string('email')->unique();
            $table->string('emailSs')->nullable();
            $table->string('emailFact')->nullable();
            $table->string('adresse');
            $table->string('adresseSs')->nullable();
            $table->string('tele');
            $table->text('observation');
            $table->string('siteInternet');
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
        Schema::dropIfExists('clients');
    }
};
