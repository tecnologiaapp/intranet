<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealtyConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healty_conditions', function (Blueprint $table) {
            $table->id();
            $table->date('current_date');
            $table->unsignedBigInteger('user_id');
            $table->json('healty_condition');
            $table->boolean('covid_symptom')->default(false);
            $table->boolean('covid_contact')->default(false);
            $table->json('symptoms');
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
        Schema::dropIfExists('healty_conditions');
    }
}
