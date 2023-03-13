<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('plate_number')->nullable(); //Placa del equipo
            $table->json('help_topics');
            $table->json('hardware_failures')->nullable();
            $table->json('software_failures')->nullable();
            $table->json('email_failures')->nullable();
            $table->text('content');
            $table->string('image')->nullable();
            $table->enum('status', ['Pending review', 'In Review', 'Resolved', 'Closed'])->default('Pending review');
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
        Schema::dropIfExists('tickets');
    }
}
