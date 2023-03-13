<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('projects', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->text('description')->nullable();
         $table->float('progress')->default(0);
         $table->string('budget')->default(0);
         $table->string('status')->default('In progress');
         $table->date('end_date');
         $table->unsignedBigInteger('user_id');
         $table->unsignedBigInteger('dependency_id')->default(1);
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
      Schema::dropIfExists('projects');
   }
}
