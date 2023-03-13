<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('courses', function (Blueprint $table) {
         $table->id();
         $table->uuid('uuid')->nullable()->unique();
         $table->foreignId('user_id')->constrained()->onDelete('cascade');
         $table->string('title');
         $table->string('subtitle');
         $table->string('slug');
         $table->text('to_learn');
         $table->enum('level', ['All', 'Beginner', 'Intermediate', 'Advanced']);
         $table->string('language')->default('Spanish');
         $table->boolean('featured')->default(0);
         $table->string('price')->default(0);
         $table->enum('status', ['Published', 'Pending', 'Rejected'])->default('Pending');
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
      Schema::dropIfExists('courses');
   }
}
