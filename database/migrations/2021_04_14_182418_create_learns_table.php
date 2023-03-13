<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('learns', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->string('slug');
         $table->longText('content');
         $table->string('image')->nullable();
         $table->unsignedBigInteger('user_id');
         $table->enum('status', ['Inactive', 'Active'])->default('Active');
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
      Schema::dropIfExists('learns');
   }
}
