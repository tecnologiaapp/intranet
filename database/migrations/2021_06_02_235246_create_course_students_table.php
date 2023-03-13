<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('course_students', function (Blueprint $table) {
         $table->id();
         $table->unsignedBigInteger('user_id');
         $table->unsignedBigInteger('course_id');
         $table->enum('course_status', ['Pending', 'Cancelled', 'Paid out']);
         
         $table->decimal('amount', 8, 2);
         $table->text('body')->nullable();
         $table->float('rating', 4, 1)->default(5.0);
         $table->enum('rating_status', ['Pending', 'Approved', 'Rejected'])->default('Pending');

         $table->string('invoice');
         $table->string('token');

         $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

         $table->foreign('course_id')
            ->references('id')
            ->on('courses')
            ->onDelete('cascade');

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
      Schema::dropIfExists('course_students');
   }
}
