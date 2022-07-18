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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('type');
            $table->text('desc');
            $table->string('status');
            $table->date('dateDb');
            $table->date('dateFn');
            $table->boolean('etat');
            // $table->int('tempsNes');
            // $table->int('frequence');
            // $table->foreign('current_team_id')->nullable();
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
        Schema::dropIfExists('interventions');
    }
};
