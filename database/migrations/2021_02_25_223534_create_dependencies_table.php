<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependenciesTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('dependencies', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->string('slug');
         $table->text('description')->nullable();

         //Actualizar la información mediante el correo del dueño
         $table->string('owner_name');
         $table->string('owner_username');
         $table->string('owner_image');
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
      Schema::dropIfExists('dependencies');
   }
}
