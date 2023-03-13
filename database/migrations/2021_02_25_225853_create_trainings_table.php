<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('trainings', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->string('slug');
         $table->string('image')->default('https://fakeimg.pl/600x420/100/?text=AGENCIA%20APP');
         $table->text('video')->nullable();
         $table->text('description')->nullable();
         $table->unsignedBigInteger('training_category_id');

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
      Schema::dropIfExists('trainings');
   }
}
