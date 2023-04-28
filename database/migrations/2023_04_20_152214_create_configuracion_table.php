<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_usuario');
            $table->string('nombres_usuario');
            $table->string('apellidos_usuario');
            $table->string('correo_usuario');
            $table->string('subdirección_usuario');
            $table->string('tipo_soporte');
            $table->string('detalle');
            $table->string('observacion')->nullable()->default('N/A');
            $table->enum('estado', ['Recibido', 'En proceso', 'Finalizado'])->default('Recibido');
            $table->integer('contador')->default(0);
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
        Schema::dropIfExists('configuracion');
    }
}
