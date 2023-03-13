<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            // $table->string('codigo')->autoIncrement();
            $table->string('nombres_solicitante');
            $table->string('apellidos_solicitante');
            $table->string('correo_solicitante');
            $table->string('subdirección_solicitante');
            $table->string('cedula_usuario');
            $table->string('nombres_usuario');
            $table->string('apellidos_usuario');
            $table->string('telefono_usuario');
            $table->string('correo_usuario');
            $table->string('subdirección_usuario');
            $table->string('numero_contrato');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('unidad')->nullable();
            $table->string('permiso_unidad')->nullable();
            $table->string('objeto_contrato');
            $table->enum('estado', ['recibido', 'en proceso', 'finalizado'])->default('recibido');
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
        Schema::dropIfExists('solicitudes');
    }
}
