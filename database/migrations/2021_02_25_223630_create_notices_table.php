<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('notices', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->string('slug');
         $table->text('excerpt')->nullable();
         $table->longText('content');
         $table->string('image')->nullable();
         $table->unsignedBigInteger('user_id');
         $table->unsignedBigInteger('notice_category_id');
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
      Schema::dropIfExists('notices');
   }
}
