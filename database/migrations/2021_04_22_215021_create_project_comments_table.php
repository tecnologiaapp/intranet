<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectCommentsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('project_comments', function (Blueprint $table) {
         $table->id();
         $table->text('title');
         $table->unsignedBigInteger('user_id');
         $table->unsignedBigInteger('project_task_id');
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
   Schema::dropIfExists('project_comments');
   }
}
