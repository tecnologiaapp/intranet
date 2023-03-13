<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('lessons', function (Blueprint $table) {
         $table->id();
         $table->foreignId('course_id')->constrained()->onDelete('cascade');
         $table->foreignId('user_id')->constrained()->onDelete('cascade');
         $table->string('title');
         $table->uuid('uuid');
         $table->string('video')->nullable();
         $table->boolean('preview')->default(false);
         $table->boolean('published')->default(false);
         $table->enum('lesson_type', ['Lecture', 'Quiz', 'Video', 'Document'])->default('Video');
         $table->string('duration')->default('1');
         $table->integer('sortOrder');
         $table->timestamps();
         $table->softDeletes();
      });
   }

   /**
   * Reverse the migrations.
   *
   * @return void
   */
   public function down()
   {
      Schema::dropIfExists('lessons');
   }
}
